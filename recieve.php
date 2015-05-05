<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 5/5/15
 * Time: 11:02 AM
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
	$name = $_GET['name'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	$password = $_GET['password'];

	$sql="INSERT INTO `user`(`name`, `age`, `email`, `password`) VALUES ( '$name' ,'$age', '$email' , '$password' );";

	if ( mysql_query( $sql ) ) {
		echo "Data Inserted correctly";
	}
}