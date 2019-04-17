<?php include 'left_panel.php';?>
<?php include 'body.php';?>




    <div id="right-panel" class="right-panel">

       
       

       
        <div class="content mt-3">
            


                <div class="row">
                    <form action="" method="POST">
                        <div class="card">
                                <div class="card-header"><strong>Employee Registration</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="full_name" class=" form-control-label">Full Name</label>
                                        <input type="text"  placeholder="Full Name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">Email</label>
                                        <input type="email" placeholder="Email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class=" form-control-label">Gender</label>
                                        <input type="text" placeholder="Gender" class="form-control" required>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="department" class=" form-control-label">Department</label>
                                                <input type="text" placeholder="Department" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class=" form-control-label">Password</label>
                                                <input type="password" placeholder="Password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Add" class="btn btn-info">
                                </div>
                            </div>
                           </form> 
                        </div><!-- .animated -->
                                    
                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<?php
 if (isset($_POST['submit'])) {
    
    include ('dbconnect.php');
    
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $department=$_POST['department'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"INSERT INTO employee(full_name,email,gender,department,password) VALUES ('$full_name','$email','$gender','$department','$password')");

    if ($sql) {
        ?>
        <script type="text/javascript">window.alert('New Employee Registered');</script>
        <?php
        header("refresh:0;url=employee_table.php");
    } else {
        ?>
        <script type="text/javascript">window.alert('Registartion failed');</script>
        <?php
        header("refresh:0;url=employee_reg.php");
        
    }
    
} 

?>


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>