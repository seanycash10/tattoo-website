<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'database_handler.php';
$dao = new Dao();


$username = $_POST['user_name'];
$password = $_POST['password'];
$second_password = $_POST['second_password'];

$check_username = false;
$check_password = false;

if(preg_match("/\w*@.*\.[a-z]{2,4}/", $username) && $dao->validate_username($username)){
	$check_username = true;
}


if(strlen($password) >= 8 && $password == $second_password){
	$check_password = true;
}

$_SESSION = array();
if($check_password && $check_username){
	$dao->insert($username, $password);
	$_SESSION['log_in'] = true;
	header("Location: https://website-tattoo.herokuapp.com/pages/index.php");
	exit;
}
else{
	if(!$check_passord){
		$_SESSION['message'] = "Invalid password. Password must be longer than 8 characters";
	}
	if(!$check_username){
		$_SESSION['message'] = "Invalid username";
	}
	header("Location: https://website-tattoo.herokuapp.com/pages/signup.php");
	exit;
}
?>
