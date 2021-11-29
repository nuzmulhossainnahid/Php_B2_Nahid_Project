<?php include './inclides/header.php';?>

<section class="py-5">
        <div class="container">

            <?php if(isset($result)){?>

            <div class="row mb-4">
                <div class="col-md-9 mx-auto">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $name?></td>
                                    <td><?php echo $email?></td>
                                    <td><?php echo $mobile?></td>
                                    <td>
                                    <?php 
                                    foreach($subject as $value)
                                    {
                                        echo $value.'</br>';
                                    }
                                    ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                                
            </div>
            <?php
            }?>
        
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Please fill the information</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Email:</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Mobile: </label>
                                    <div class="col-md-9">
                                        <input type="number" name="mobile" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Subject</label>
                                    <div class="col-md-9">
                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="Bangla">Bangla
                                        </label>

                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="english">English
                                        </label>

                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="math">Math
                                        </label>
                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="physics">physics
                                        </label>
                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="Chemistry">Chemistry
                                        </label>
                                        <label for="">
                                            <input type="checkbox" name="subject[]" value="CSE">CSE
                                        </label>
                                            
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn2" class="btn btn-outline-success btn-block"/>
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