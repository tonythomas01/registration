<?php


echo "Yay! The request is here in recieve.php";

$email = $_GET['email'];
$passworsd = $_GET['pass'];

echo "I got the username as $email and password as $passworsd";

$mysqlhost = 'localhost';
$mysqlusername = 'root';
$mysqlpassword = 'toor';

if ( mysql_connect($mysqlhost,$mysqlusername, $mysqlpassword) ) {
	echo "connection succesfull";
}

if ( mysql_select_db("registration") ) {
	echo "Selected db succesfully";
}

$sql = "INSERT INTO `user`(`user_email`, `user_password`) VALUES ('$email','$passworsd')";

echo $sql;

if ( mysql_query( $sql ) ) {
	echo "Yay! Inserted";
}
