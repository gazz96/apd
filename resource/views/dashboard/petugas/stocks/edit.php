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

        <div class="col-12 col-md-4">
        
            <form action="?pagename=admin-stocks-update&id=<?php echo $post['id'] ?? '' ?>" method="POST">
                
                

                <div class="form-group">
                    <label for="i-product_id">Product</label>
                    <select name="product_id" class="form-control" id="i-product_id">
                        <?php foreach( $products as $product ) : ?>
                            <option value="<?php echo $product['id'] ?>" <?php if( $product['id'] == $post['product_id']) echo "selected"; ?>><?php echo $product['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="i-qty">Qty</label>
                    <input name="qty" type="text" class="form-control" id="i-qty" value="<?php echo $post['qty'] ?>">
                </div>

                
                
                <div class="d-flex justify-content-between">
                    <a href="?pagename=admin-users-index" class="btn btn-warning">Back</a>
                    <button class="btn btn-primary">Save Stock</button>
                </div>
            </form>
        
        </div>

    </div>
</div>
