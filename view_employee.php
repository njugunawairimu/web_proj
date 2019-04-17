<?php
include 'dbconnect.php';
include 'left_panel.php';

$id=$_GET['id'];

$sql=mysqli_query($conn,"SELECT * FROM employee WHERE id='$id'")or die(mysqli_error($conn));
while ($record=mysqli_fetch_assoc($sql)) {
	$id=$record['id'];
	$full_name=$record['full_name'];
	$email=$record['email'];
	$gender=$record['gender'];
	$department=$record['department'];

    
}
?>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOTEL MANAGEMENT SYSTEM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <div id="right-panel" class="right-panel">

        
        <?php include 'header.php';?>
        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="content.php">Dashboard</a></li>
                            <li class="active">View Record</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
	        <div class="col-sm-8">
	        	<h4 align="center" style="margin: 10px">DETAILS OF <?php echo $full_name;?></h4>
	        	<div class="card">
	            <div class="card-body card-block">
	                <div class="form-group">
	                	<label for="id" class=" form-control-label">Id</label>
	                	<input type="text" class="form-control" disabled value="<?php echo $id;?>">
	                </div>
                    <div class="form-group">
                    	<label for="full_name" class=" form-control-label">Full Name</label>
                    	<input type="text" class="form-control" disabled value="<?php echo $full_name;?>">
                    </div>
                	<div class="form-group">
                		<label for="email" class=" form-control-label">Email</label>
                		<input type="email" class="form-control" disabled value="<?php echo $email;?>">
                	</div>
                    <div class="row form-group">
                        <div class="col-6">
                        	<div class="form-group">
                        		<label for="gender" class=" form-control-label">Gender</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $gender;?>">
                        	</div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            	<label for="department" class=" form-control-label">Department</label>
                            	<input type="text" class="form-control" disabled value="<?php echo $department;?>">
                            </div>
                    	</div>
                    </div>
                </div>
	        </div>
        </div>
        <div class="col-sm-2"></div>