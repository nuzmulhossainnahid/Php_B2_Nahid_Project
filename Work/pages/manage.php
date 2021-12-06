<?php include'include/header.php' ?>

<div class="card-columns">
    <?php foreach ($students as $student) { ?>
    <div class="card">
        <img class="card-img-top" src="<?php echo $student['image'];?>" height="200" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">Name: <?php echo $student['name'];?></h6>
            <h6 class="card-title">Email: <?php echo $student['email'];?></h6>
            <h6 class="card-title">Mobile: <?php echo $student['mobile'];?></h6>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <?php } ?>
    <div>
<?php include'include/footer.php' ?>




