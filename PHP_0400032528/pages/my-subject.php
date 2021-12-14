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
                                        <?php foreach ($subjects as $subject) { ?>
                                        <div class="card text-white bg-secondary mb-3 text-center" style="max-width: 100%;">
                                            
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $subject; ?></h5>
                                            </div>
                                            <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php";?>