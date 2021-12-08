<?php include'include/header.php' ?>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>All Student Information</h3>
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php foreach ($students as $student ) { ?>
    <tr>
                                <td><?php echo $student['name']?></td>
                                <td><?php echo $student['email']?></td>
                                <td><?php echo $student['mobile']?></td>
                                <td ><img src="<?php echo $student['image']?>" height="100" width="100" alt=""> </td>
                                <td ><a href="action.php?edit=<?php echo $student['id']?>" class="btn btn-outline-info">Edit</a>
                                    <a href="action.php?delete=<?php echo $student['id']?>" class="btn btn-outline-danger">Delete</a></td>
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