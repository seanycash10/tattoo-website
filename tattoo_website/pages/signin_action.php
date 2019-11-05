<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


$username = $_POST['user_name'];
$password = $_POST['password'];

require_once 'database_handler.php';
$dao = new Dao();

$valid = $dao->validate($username, $password);

$_SESSION = array();
if($valid){
	$_SESSION['log_in'] = true;
	header("Location: https://website-tattoo.herokuapp.com/pages/index.php");
	exit;
}
else {
   $_SESSION['message'] = "Invalid username or password";
   header("Location: https://website-tattoo.herokuapp.com/pages/signup.php");
   exit;
}
?>
