<?php include './include/header.php'; ?>

<?php if(!isset($_SESSION['id']))
{
    header("Location: ../index.php");
}?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Prime Number</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="number" class="col-form-label col-md-3">Enter Your Number</label>
                                <div class="col-md-9">
                                    <input id="number" type="number" name="given_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="result"  class="col-form-label col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input id="result" value="<?php echo isset($result) ? $result : ''; ?>" type="text" class="form-control text-danger">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Submit" name="primeBtn" class="btn btn-outline-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php include './include/footer.php'; ?>
