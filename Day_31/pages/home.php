<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">Example One</a></li>
            <li><a href="" class="nav-link">Example Two</a></li>
            <li><a href="" class="nav-link">Example Three</a></li>
        </ul>
    </div>
</nav>


<!--Section One-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Password Generator</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" mathod="post">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Enter Your password length</label>
                                <div class="col-md-9">
                                    <input type="number" name="given_length" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Your password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>