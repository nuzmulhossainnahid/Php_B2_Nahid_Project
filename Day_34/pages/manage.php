<?php include'include/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>All Student Info Goes Here</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) { ?>
                            <tr>
                                <td><?php echo $student['name'];?></td>
                                <td><?php echo $student['email'];?></td>
                                <td><?php echo $student['mobile'];?></td>
                                <td align="center"><img src="<?php echo $student['image'];?>" height="150" width="150" alt=""></td>
                            </tr>
                            
                            <?php } ?>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include'include/footer.php' ?>


