<?php 

class AdminOrdersController {

    public function __construct() {
    
    }

    public function index() {

        $model = model('OrdersModel');
        $posts = db()->query("
        
        SELECT 
            orders.id,
            orders.user_id,
            orders.order_date,
            users.fullname,
            users.username,
            users.bagian
        FROM orders
        JOIN users ON orders.user_id = users.id 

        ")
        ->fetch_all( MYSQLI_ASSOC );

        

        view('dashboard/header');
        view('dashboard/admin/orders/index', [
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


        $id = session()->get('id');
        $date = date('Y-m-d H:i:s');

        db()->query("INSERT INTO orders(`user_id`, `order_date`) VALUES('{$id}', '{$date}')");

        $id = db()->insert_id;


        $product_ids = request()->input('product_id');
        $qty = request()->input('qty');

       

        foreach($product_ids as $product_id) {

            db()
            ->query("
                INSERT INTO order_detail(`order_id`, `product_id`, `qty`)
                VALUES('{$id}', '{$product_id}', '{$qty[$product_id]}')
            ");

            //$update = db()->query("UPDATE stocks SET qty = qty - {$qty[$product_id]} WHERE product_id='{$product_id}'");

        }
        
        session()->add('status', 'success');
        session()->add('message', 'Order Success');

        header('location: ' . base_url('?pagename=petugas-orders-index') );

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