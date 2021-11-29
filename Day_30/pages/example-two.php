<?php include './inclides/header.php';?>

<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Please fill the information</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Incr or Decr.</label>
                                    <div class="col-md-9">
                                        <input type="number" name="incr_decr" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" class="form-control" id="" ><?php if(isset($result)){echo $result;}?>
                                            
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn1" class="btn btn-outline-success btn-block id="">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include './inclides/fotter.php';?>