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
                       
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Enter Your Number</div>
                                <div class="col-md-9">
                                    <input type="text" name="given_number" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <div class="col-form-label col-md-3">Result</div>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control" >
                                </div>
                            </div>
                            
                
                            <div class="form-group row">
                                <div class="col-form-label col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Submit">
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


