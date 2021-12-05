<?php include'include/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Please fill the information</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($message)){?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo $message?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        
                        <?php }?>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Name</div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Email</div>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" >
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Mobile</div>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Image</div>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-form-label col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Save info">
                                </div>
                            </div>
                           
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include'include/footer.php' ?>


