<?php

include('dbconnect.php');
include('left_panel.php');


$db_records=mysqli_query($conn,"SELECT * FROM guest") or die(mysqli_error());
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
                            <li class="active">Guest Table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    
                    
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Registered Guests</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Full name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($record=mysqli_fetch_assoc($db_records)){
                                            ?>
                                            <tr>
                                                <td><?php echo $record['id'];?></td>
                                                <td><?php echo $record['full_name'];?></td>
                                                <td><?php echo $record['email'];?></td>
                                                <td><?php echo $record['gender'];?></td>
                                                <td><?php echo $record['department'];?></td>
                                                <td><?php echo $record['password'];?></td>
                                                <td>
                                                    <a href="view_guest.php?id=<?php echo $record['id'];?>" class="btn btn-primary">View</a>
                                                    <a href="update_guest.php?id=<?php echo $record['id'];?>" class="btn btn-info">Update</a>
                                                    <a href="delete_guest.php?id=<?php echo $record['id'];?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        
                </div>   
                </div>
            </div>
        </div>
        </div>
    </div>