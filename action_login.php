<?php
if (isset($_POST['submit'])) {
    session_start();
	include 'dbconnect.php';
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'AND password='$password'") or die(mysqli_error($conn));

	foreach ($sql as $record) {
		$_SESSION['id']=$record['id'];
	}

	$num=mysqli_num_rows($sql);

	if ($num==1) {
		?>
		<script type="text/javascript">window.alert('Login Sucessful');</script>
		<?php
		header("refresh:0;url=content.php");
	} else {
		?>
		<script type="text/javascript">window.alert('Login failed');</script>
		<?php
		header("refresh:0;url=index.php");
	}
	

} 

?>