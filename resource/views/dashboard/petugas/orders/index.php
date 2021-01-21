
                
<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="page-options">
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

        <form action="?pagename=petugas-orders-store" method="POST">
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Select</td>
                                <th>Products</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            <?php foreach( $posts as $post ) : ?>

                            <tr>
                                <td width="50"><input type="checkbox" name="product_id[]" value="<?php echo $post['id'] ?>"></td>
                                <td><?php echo $post['name'] ?></td>
                                <td width="150">
                                    <input name="qty[<?php echo $post['id'] ?>]" type="number" class="form-control" value="1">
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    
                    <button class="btn btn-primary">Pesan</button>

                </div>
            </div>
        
        </form>

        
    </div>
</div>
