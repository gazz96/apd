<?php 

class AdminLaporanController {

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
        view('dashboard/admin/laporan/index', [
            'posts' => $posts
        ]);
        view('dashboard/footer');
    }

}