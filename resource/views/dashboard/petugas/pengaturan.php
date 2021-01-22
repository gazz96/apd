
                
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
            <div class="col-md-4">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <?php echo session()->getFlash('message'); ?>
                </div>
            </div>

        <?php endif; ?>

        <div class="col-12 col-md-4">
        
            <form action="?pagename=update-pengaturan" method="POST">
                
                <h3>Ganti Password</h3>

                <div class="form-group">
                    <label for="i-old_password">Password Lama</label>
                    <input name="old_password" type="password" class="form-control" id="i-old_password">
                </div>

                <div class="form-group">
                    <label for="i-new_password">Password Baru</label>
                    <input name="new_password" type="password" class="form-control" id="i-new_password">
                </div>

                <div class="form-group">
                    <label for="i-renew_pssword">Ulang Password Baru</label>
                    <input name="renew_pssword" type="password" class="form-control" id="i-renew_pssword">
                </div>

                            
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        
        </div>

    </div>
</div>
