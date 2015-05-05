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
	$email = $_GET['email'];
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