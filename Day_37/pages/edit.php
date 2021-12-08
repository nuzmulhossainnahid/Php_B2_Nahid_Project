<?php include'include/header.php' ?>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Registration Form Update</h4>
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
                            <form action="action.php"  method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="student_id" value="<?php $studentInfo['id'] ?>">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $studentInfo['name'] ?>"  name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" value="<?php echo $studentInfo['email'] ?>"  name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password"  name="password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" value="<?php echo $studentInfo['mobile']  ?>"  name="mobile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <img src="<?php echo $studentInfo['image']?>"  height="100" width="150" alt=""/>
                                        <input type="file"  name="image" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="UpdateBtn" value="Update" class="btn btn-outline-danger btn-block"/>
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