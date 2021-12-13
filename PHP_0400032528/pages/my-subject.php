<?php include "includes/header.php";


?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Subject List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th class="text-center">Your Subject Name</th>
                                </tr>
                                <tr>
                                   
                                    
                                    <td>
                                <select class="form-control" name="student_id">
                                <option selected disabled> -- Select your Subject Name --</option>
                                    <?php foreach ($subjects as $subject) { ?>
                                <option ><?php echo $subject; ?></option>
                                    
                                    <?php } ?>
                                </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><input type="submit" value="Submit" class="btn btn-outline-success"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php";?>