<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 5/5/15
 * Time: 11:54 AM
 */
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$mysqlUser = 'root';
	$mysqlPassword = 'toor';
	$mysqlServer = 'localhost';
	$database = 'registration';
	$conn = mysql_connect( $mysqlServer, $mysqlUser, $mysqlPassword );

	if ( !mysql_select_db( $database ) ) {
		return false;
	}
	$email = $_POST['email'];

	$sql = "SELECT `user_password` FROM `user` WHERE `user_email`= '$email'";

	$result = mysql_query( $sql);
	$row = mysql_fetch_assoc($result);
	
	if( mysql_num_rows( $result ) > 0) {
		echo json_encode(array("password"=> $row['user_password']));
	} else {
		echo json_encode(array("success"=> "false"));
	}
}
