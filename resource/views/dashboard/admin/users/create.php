
                
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
        
            <form action="?pagename=admin-users-store" method="POST">
                
                <div class="form-group">
                    <label for="i-fullname">Fullname</label>
                    <input name="fullname" type="text" class="form-control" id="i-fullname">
                </div>

                <div class="form-group">
                    <label for="i-username">Username</label>
                    <input name="username" type="text" class="form-control" id="i-username">
                </div>

                <div class="form-group">
                    <label for="i-userpass">Password</label>
                    <input name="userpass" type="password" class="form-control" id="i-userpass">
                </div>
                
                <div class="form-group">
                    <label for="i-role_id">Role</label>
                    <select name="role_id" class="form-control" id="i-role_id">
                        <?php foreach( $roles as $role ) : ?>
                            <option value="<?php echo $role['id'] ?>"><?php echo $role['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="i-status">Status</label>
                    <select name="status" class="form-control" id="i-status">
                        <?php foreach( ['Active', 'Inactive'] as $status ) : ?>
                            <option value="<?php echo $status ?>"><?php echo $status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="?pagename=admin-users-index" class="btn btn-warning">Back</a>
                    <button class="btn btn-primary">Save User</button>
                </div>
            </form>
        
        </div>

    </div>
</div>
