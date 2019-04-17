<?php include 'left_panel.php';?>
<?php include 'body.php';?>

<?php
include ('dbconnect.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"SELECT * FROM guest WHERE id='$id'")or die(mysqli_error($conn));
while ($record=mysqli_fetch_assoc($sql)) {
	$id=$record['id'];
	$full_name=$record['full_name'];
	$email=$record['email'];
	$gender=$record['gender'];
	$department=$record['department'];
    $password=$record['password'];
}
?>




        <div class="col-sm-2"></div>
	        <div class="col-sm-8">
                <h4 align="center" style="margin: 10px">DETAILS OF <?php echo $full_name;?></h4>
                <form action="" method="POST">
    	        	<div class="card">
    	            <div class="card-body card-block">
    	                <div class="form-group">
    	                	<label for="id" class=" form-control-label">Id</label>
    	                	<input type="text" class="form-control" disabled value="<?php echo $id;?>">
    	                </div>
                        <div class="form-group">
                        	<label for="full_name" class=" form-control-label">Full Name</label>
                        	<input type="text" class="form-control" value="<?php echo $full_name;?>" name="full_name">
                        </div>
                    	<div class="form-group">
                    		<label for="email" class=" form-control-label">Email</label>
                    		<input type="email" class="form-control" value="<?php echo $email;?>" name="email">
                    	</div>
                        <div class="row form-group">
                            <div class="col-6">
                            	<div class="form-group">
                            		<label for="gender" class=" form-control-label">Gender</label>
                            		<input type="text" class="form-control" value="<?php echo $gender;?>" name="gender">
                            	</div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                	<label for="department" class=" form-control-label">Department</label>
                                	<input type="text" class="form-control" value="<?php echo $department;?>" name="department">
                                </div>
                        	</div>
                        </div>
                        <div class="form-group">
                            <label for="password" class=" form-control-label">Password</label>
                            <input type="password" class="form-control" value="<?php echo $password;?>" name="password">
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-2">
                                <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Update">
                            </div>
                        </div>
                    </div>
    	        </div>
            </form>
        </div>
        <div class="col-sm-2"></div>

        <?php
        if (isset($_POST['submit'])){
            $full_name=$_POST['full_name'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $department=$_POST['department'];
            $password=$_POST['password'];
            $sq=mysqli_query($conn,"UPDATE guest set full_name='$full_name',email='$email',department='$department',password='$password'where id='$id'")or die (mysqli_error($conn));
            if ($sq){
                ?>
                 <script type="text/javascript">
                 window.alert('Update Successful');
                 window.location.href='admin_table.php';
                </script>
                <?php

            }else{
                ?>
                 <script type="text/javascript">
                 window.alert('Update Failed');
                 window.location.href='update.php';
                </script>
                <?php
            }
        }
        ?>