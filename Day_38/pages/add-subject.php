<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Add Subject Form</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo isset($message) ? $message: '';?></h4>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Student Name</label>
                                <div class="col-md-9">
                                    <select name="" id="" class="form-control">
                                        <option value="">-- Select Student Name --</option>
                                        <?php foreach ($students as $student) { ?>
                                        <option value=""><?php echo $student['name']; ?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Subject Name</label>
                                <div class="col-md-9">
                                    <label for=""><input type="checkbox" name="subject" value="Bangla" >Bangla </label>
                                    <label for=""><input type="checkbox" name="subject" value="English" >English </label>
                                    <label for=""><input type="checkbox" name="subject" value="Math" >Math </label>
                                    <label for=""><input type="checkbox" name="subject" value="Chemistry" >Chemistry </label>
                                    <label for=""><input type="checkbox" name="subject" value="Physics" >Physics </label>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="Add Subject" name="subjectBtn" class="btn btn-outline-danger btn-block" value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ;?>
