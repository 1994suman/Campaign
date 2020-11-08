<?php  
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With"); 
?>
<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="admin_login.php">Go to admin Login!</a>';
?>