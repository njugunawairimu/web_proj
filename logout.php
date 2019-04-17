<?php
session_start();
include ('action_login.php');
session_destroy();
echo "Loging out............";
header('refresh:2;url=index.php');

?>