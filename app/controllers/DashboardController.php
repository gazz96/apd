<?php 

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
            SELECT * FROM users 
            JOIN roles ON roles.id = users.role_id 
            WHERE username='{$username}' AND userpass='{$userpass}'
        ";

        $user = db()->query( $query_str )->fetch_array();


        if( $user ) {

            session()->set( $user + [ 'is_login' => 1 ]);


            header('location: ' . base_url('?pagename=admin-orders-index') );
            exit;

        }

        session()->add('status', 'warning');
        session()->add('message', 'Username and password not match');
        
        header('location: ' . base_url('?pagename=login') );
        

    }

}