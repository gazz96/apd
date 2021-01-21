<?php 

class PetugasStocksController {

    public function __construct() {
    
    }

    public function index() {

        $model = model('StocksModel');

        $posts = db()->query("SELECT * FROM stocks JOIN products ON products.id = stocks.product_id")->fetch_all(MYSQLI_ASSOC);

        view('dashboard/header');
        view('dashboard/petugas/stocks/index', [
            'posts' => $posts
        ]);
        view('dashboard/footer');
    }

    public function create() {
        view('dashboard/header');
        view('dashboard/petugas/stocks/create',[
            'products' => model('ProductsModel')->all()
        ]);
        view('dashboard/footer');
    }

    public function store() {

        $data = request()->only([
            'product_id',
            'qty'
        ]);
        
        $product_id = request()->input('product_id');

        $findProduct = db()->query("SELECT * FROM stocks WHERE product_id='{$product_id}'" )->fetch_array();

        if( $findProduct ) {

            $update = db()->query("UPDATE stocks SET qty = qty + {$data['qty']} WHERE product_id='{$product_id}'");

        } else {

            $model = model('StocksModel');
            $model->create( $data );

        }

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=petugas-stocks-index') );

    }

    public function edit( $id ) {


        $model = model('StocksModel');
        $post = $model->find( $id );


        view('dashboard/header');
        view('dashboard/petugas/stocks/edit', [
            'post' => $model->find( $id ),
            'products' => model('ProductsModel')->all()
        ]);
        view('dashboard/footer');
    }

    public function update( $id ) {

        $data = request()->only([
            'product_id',
            'qty'
        ]);

        $productModel = model('StocksModel');
        $productModel->update( $data, [
            'id' => $id
        ]);

        session()->add('status', 'success');
        session()->add('message', 'Data saved');

        header('location: ' . base_url('?pagename=petugas-stocks-index') );
    }

    public function delete( $id ) {
  
        $productModel = model('StocksModel');
        $productModel->delete( $id );

        session()->add('status', 'success');
        session()->add('message', 'Data deleted');

        header('location: ' . base_url('?pagename=petugas-stocks-index') );

    }

}