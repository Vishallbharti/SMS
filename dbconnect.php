<?php
$ser="localhost";
$user="root";
$pass="";
$db="sms";
$con=mysqli_connect($ser,$user,$pass,$db);
if(mysqli_connect_errno())
{
	die("Connection Failed!".mysqli_connect_error());
}
/*else
{
	echo "Connection is successfull!";
} */

?>