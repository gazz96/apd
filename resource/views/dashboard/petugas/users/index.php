
                
<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="page-options">
            <a href="?pagename=admin-users-create" class="btn btn-primary">Add new</a>
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
                            <th>Fullname</th>
                            <th scope="col">Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach( $posts as $post ) : ?>

                        <tr>
                            <th scope="row"><?php echo ++$no; ?></th>
                            <td><?php echo $post['fullname'] ?></td>
                            <td><?php echo $post['username'] ?></td>
                            <td><?php echo $post['name']; ?></td>
                            <td><?php echo $post['status'] ?></td>
                            <td>
                                <a href="<?php echo base_url('?pagename=admin-users-edit&id=' . $post['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo base_url('?pagename=admin-users-delete&id=' . $post['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
