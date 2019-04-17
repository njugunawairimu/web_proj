<?php
if (isset($_POST['submit'])) {
	
	include ('dbconnect.php');
	
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];

	$sql=mysqli_query($conn,"INSERT INTO admin(full_name,email,gender,password) VALUES ('$full_name','$email','$gender','$password')");

	if ($sql) {
		?>
		<script type="text/javascript">window.alert('Registartion successful. Welcome User');</script>
		<?php
		header("refresh:0;url=content.php");
	} else {
        ?>
		<script type="text/javascript">window.alert('Registartion failed');</script>
		<?php
		header("refresh:0;url=register.php");
		
	}
	
} else {
	echo "error";

}

?>