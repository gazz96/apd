<?php 




?>
                
<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="page-options">
            <!-- <a href="?pagename=admin-products-create" class="btn btn-primary">Add new</a> -->
        </div>
    </div>
    <div class="main-wrapper">

        <?php $status = session()->getFlash('status'); ?>

        <?php if( $status ) : ?>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <?php echo session()->getFlash('message'); ?>
        </div>

        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th>Username</th>
                            <th scope="col">Order</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach( $posts as $post ) : ?>

                        <?php 
                            
                        $orders = db()->query("
                            SELECT * FROM order_detail 
                            JOIN products ON order_detail.product_id = products.id 
                            WHERE order_id='{$post['id']}'
                        ")
                        ->fetch_all( MYSQLI_ASSOC ); 
                        
                        ?>

                        <tr>
                            <th scope="row"><?php echo ++$no; ?></th>
                            <td><?php echo $post['username'] ?></td>
                            <td>
                                <ul>
                                <?php foreach( $orders as $order ): ?>

                                    <li>
                                        <div><?php echo $order['name'] ?></div> 
                                        Jumlah Order: <?php echo $order['qty'] ?>
                                    </li>

                                <?php endforeach; ?>
                                </ul>
                            </td>
                            <td><?php echo (new DateTime)->format('j, F Y') ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
