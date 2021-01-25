<?php

use function PHPSTORM_META\map;

class DashboardController {

    public function index() {
        view('dashboard/header');
        view('dashboard/index');
        view('dashboard/footer');
    }

    public function login() {
        view('dashboard/signin');
    }

    public function check_login() {

        
      
        $username = request()->input('username');
        $userpass = md5( request()->input('userpass') );
        
        $query_str = "
            SELECT users.*, roles.name FROM users 
            JOIN roles ON roles.id = users.role_id 
            WHERE username='{$username}' AND userpass='{$userpass}'
        ";


        $user = db()->query( $query_str )->fetch_array( MYSQLI_ASSOC );

        if( $user ) {

            session()->setData( $user + [ 'is_login' => 1 ]);

            var_dump( $user );

            if( $user['name'] == 'Petugas') {
                header('location: ' . base_url('?pagename=petugas-orders-index') ); exit;
            }
            
            if( $user['name'] == 'Admin') header('location: ' . base_url('?pagename=admin-orders-index') ); exit; 
           


        }

        

        session()->add('status', 'warning');
        session()->add('message', 'Username and password not match');
        
        header('location: ' . base_url('?pagename=login') ); exit;
        

    }

    public function logout() {
        session()->destroy();
        header('location: ' . base_url('?pagename=login') );
        
    }

    public function pengaturan() {
        view('dashboard/header');
        view('dashboard/petugas/pengaturan');
        view('dashboard/footer');
    }

    public function updatePengaturan() {

        $data = request()->only([
            'old_password',
            'new_password',
            'renew_password'
        ]);

        $id = session()->get('id');

        $user = db()->query("SELECT * FROM users WHERE id='{$id}'")->fetch_array();



        if( $user['userpass'] != md5($data['old_password'] ) ) 
        {

            session()->add('status', 'warning');
            session()->add('message', 'Old password incorrect');
            header('location: ' . base_url('?pagename=pengaturan') );
            exit;
        }

        if( $data['new_password'] != $data['renew_password'] ) 
        {

            session()->add('status', 'warning');
            session()->add('message', 'New password not match');
            header('location: ' . base_url('?pagename=pengaturan') );
            exit;
        }

        

        $model = model('UsersModel');
        $model->update([
            'userpass' => md5( $data['newpassword'] ),
        ], [
            'id' => session()->get('id')
        ]);
        
        session()->add('status', 'success');
        session()->add('message', 'Password changed');
        header('location: ' . base_url('?pagename=pengaturan') );

    }

    public function bantuan() {
        view('dashboard/header');
        view('dashboard/petugas/bantuan');
        view('dashboard/footer');
    }


}