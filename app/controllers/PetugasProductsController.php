<?php 

class PetugasProductsController {

    public function __construct() {
    
    }

    public function index() {

        $productModel = model('ProductsModel');

        $posts = $productModel->all();

        view('dashboard/header');
        view('dashboard/petugas/products/index', [
            'posts' => $posts
        ]);
        view('dashboard/footer');
    }

    public function create() {
        view('dashboard/header');
        view('dashboard/petugas/products/create');
        view('dashboard/footer');
    }

    public function store() {

        $data = request()->only([
            'name',
            'code',
            'description'
        ]);
        
        $productModel = model('ProductsModel');
        $productModel->create( $data );

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=petugas-products-index') );

    }

    public function edit( $id ) {

        $quer_str = "
            SELECT * FROM 
            products WHERE id = '{$id}'
        ";

        $post = db()
                ->query($quer_str)
                ->fetch_array();


        view('dashboard/header');
        view('dashboard/petugas/products/edit', [
            'post' => $post
        ]);
        view('dashboard/footer');
    }

    public function update( $id ) {

        $data = request()->only([
            'name',
            'code',
            'description'
        ]);

        $productModel = model('ProductsModel');
        $productModel->update( $data, [
            'id' => $id
        ]);

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=petugas-products-index') );
    }

    public function delete( $id ) {

        
        $productModel = model('ProductsModel');
        $productModel->delete( $id );

        session()->add('status', 'success');
        session()->add('message', 'Data deleted');

        header('location: ' . base_url('?pagename=petugas-products-index') );

    }

}