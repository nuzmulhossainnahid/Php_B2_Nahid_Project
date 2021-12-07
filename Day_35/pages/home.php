<?php include'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Please fill All the Information</h3>
                    </div>
                    <div class="card-body">

                        <?php if(isset($messege)) {?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo $messege ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-3">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-form-label col-md-3">User Email</label>
                                <div class="col-md-9">
                                    <input type="email" id="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-form-label col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" id="mobile" name="mobile" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" id="image" name="image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Save Info" class="btn btn-outline-success btn-block"/>
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


