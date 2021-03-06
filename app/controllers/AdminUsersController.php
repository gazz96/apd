<?php 

class AdminUsersController {

    public function __construct() {
    
    }

    public function index() {

        $posts = db()->query("
        
        SELECT users.*, roles.name FROM users
        LEFT JOIN roles ON roles.id = users.role_id
        
        ");

        view('dashboard/header');
        view('dashboard/admin/users/index', [
            'posts' => $posts,
        ]);
        view('dashboard/footer');
    }

    public function create() {
        view('dashboard/header');
        view('dashboard/admin/users/create',[
            'roles' => model('RolesModel')->all()
        ]);
        view('dashboard/footer');
    }

    public function store() {

        $data = request()->only([
            'fullname',
            'username',
            'status',
            'role_id',
            'bagian'
        ]);

        if( request()->input('userpass')) $data['userpass'] = md5( request()->input('userpass') );
        
        $productModel = model('UsersModel');
        $productModel->create( $data );

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=admin-users-index') );

    }

    public function edit( $id ) {

       
        $post = model('UsersModel')->find( $id );

        view('dashboard/header');
        view('dashboard/admin/users/edit', [
            'post' => $post,
            'roles' => model('RolesModel')->all()
        ]);
        view('dashboard/footer');
    }

    public function update( $id ) {

        $data = request()->only([
            'fullname',
            'username',
            'status',
            'role_id',
            'bagian'
        ]);

        if( request()->input('userpass')) $data['userpass'] = md5( request()->input('userpass') );

        $model = model('UsersModel');
        $model->update( $data, [
            'id' => $id
        ]);

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=admin-users-index') );
    }

    public function delete( $id ) {

        
        $productModel = model('UsersModel');
        $productModel->delete( $id );

        session()->add('status', 'success');
        session()->add('message', 'Data deleted');

        header('location: ' . base_url('?pagename=admin-users-index') );

    }

}