<?php include ('left_panel.php');?>
<?php include ('body.php');?>
<?php
include ('dbconnect.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'")or die(mysqli_error($conn));
while ($record=mysqli_fetch_assoc($sql)) {
    
    $full_name=$record['full_name'];
    $email=$record['email'];
    $gender=$record['gender'];
    

    
}
?>
    <div id="right-panel" class="right-panel">
        <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="full_name" class=" form-control-label">Full Name</label>
                        <input type="text" class="form-control" disabled value="<?php echo $full_name;?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" class="form-control" disabled value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                        <label for="gender" class=" form-control-label">Gender</label>
                        <input type="text" class="form-control" disabled value="<?php echo $gender;?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>