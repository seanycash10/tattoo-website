<?php

class Dao{
	private $host = 'us-cdbr-iron-east-05.cleardb.net';
  	private $dbname = 'heroku_7bd2ae6dd59a7b8';
  	private $username = 'b926c407cc522b';
  	private $password = '60164b03';

  public function __construct(){

  }

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }

  public function insert($username, $password){
  	$conn = $this->getConnection();
    $saveQuery = "insert into user (email, password) values (:user, :password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $username);
    $q->bindParam(":password", $password);
    $q->execute();
  }

  public function validate_username($username){
  	$conn = $this->getConnection();
  	try{
  	   $stmt = $conn->prepare("select * from user where email = ?");
  	   $stmt->execute([$username]);
  	   $users = $stmt->fetch();
  	   if($users){
  	   	return false;
  	   }
  	   else{
  	   	return true;
  	   }
  	}
  	catch(Exception $e){
  		echo print_r($e, 1);
  		exit;
  	}
 
  }

  public function validate($username, $password){
  	$conn = $this->getConnection();
  	try{
  	 	$usernames = $conn->prepare("select * from user where email = ?");
  	 	$usernames->execute([$username]);
  	 	$users = $usernames->fetch();

  	 	if($users && $password == $users['password']){
  	 		return true;
  	 	}
  	 	else{
  	 		return false;
  	 	}
  	}catch(Exception $e){
  		echo print_r($e,1);
      	exit;
  	}
  }

}
?>