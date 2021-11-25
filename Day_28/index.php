<?php

require_once './vendor/autoload.php';

    use App\classes\Student;
    $result= ' ';
    if(isset($_POST['btn'])) 
    {
        $student = new Student($_POST);
        $result =$student->index();
    }
    // $student->test();
    // $student->index();
    



/*
    $student = new Student();
    $student->index();

    echo $student->name."<br/>";
    echo Student::$location;
    echo Student::test();//Scop resolation proprity
    // echo $student->test();
    */
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./assets/css/bootstrap.css"/>
    <title>Document</title>
</head>
<body>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="card">
                            <div class="card-header">
                                Enter The Information
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="first" class="col-form col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input id="first" type="text" name="first_name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last" class="col-form col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input id="last" type="text" name="last_name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="full" class="col-form col-md-3" >Full Name</label>
                                    <div class="col-md-9">
                                        <input id="full" type="text" value="<?php echo $result; ?>" name="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="button" class="col-form col-md-3"></label>
                                    <div class="col-md-9">
                                        <input id="submit" type="submit" value="submit" name="btn" class="btn btn-outline-success"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script src="./assets/js/jquery-3.6.0.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/bootstrap.js"></script>
</body>
</html>