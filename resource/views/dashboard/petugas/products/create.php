
                
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
        
            <form action="?pagename=admin-products-store" method="POST">
                
                <div class="form-group">
                    <label for="i-code">Code</label>
                    <input name="code" type="text" class="form-control" id="i-code">
                </div>

                <div class="form-group">
                    <label for="i-name">Name</label>
                    <input name="name" type="text" class="form-control" id="i-name">
                </div>

                <div class="form-group">
                    <label for="i-description">Description</label>
                    <textarea name="description" id="i-description" cols="30" rows="5" class="form-control"></textarea>
                </div>
                
                
                <div class="d-flex justify-content-between">
                    <a href="?pagename=admin-products-index" class="btn btn-warning">Back</a>
                    <button class="btn btn-primary">Save Product</button>
                </div>
            </form>
        
        </div>

    </div>
</div>
