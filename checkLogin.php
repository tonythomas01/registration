<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 5/5/15
 * Time: 11:54 AM
 */
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	$mysqlUser = '';
	$mysqlPassword = '';
	$mysqlServer = 'localhost';
	$database = 'registration';
	$conn = mysql_connect( $mysqlServer, $mysqlUser, $mysqlPassword );

	if ( !mysql_select_db( $database ) ) {
		return false;
	}
	//I see vulnerabilities in the below code
	//$email = $_GET['email'];
	$email = test_input($_GET["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 echo "Invalid email format"; 
	}
	
	
	$password = $_GET['password'];

	$sql = "SELECT * FROM `user` WHERE `email`= '$email' AND `password`='$password';";
	$result = mysql_query( $sql);
	$userInfo = mysql_fetch_assoc( $result );
	if ( $userInfo ) {
		echo "Login Successful";
	} else {
		echo "Login Un-Successful";
	}

}
