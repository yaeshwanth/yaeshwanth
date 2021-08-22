<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="bsc";

$conn=mysqli_connect($server_name, $username, $password, $database_name);
//connection
if (!$conn) 
{
	die("connection failed:" .mysqli_connect_error());

	# code...
}
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$subject=$_POST['subject'];
	$messages=$_POST['messages'];

	$sql_query="INSERT INTO message(name,mail,subject,messages)
	VALUES('name','mail','subject','messages')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "Message sent successfully!";
	}
	else
	{
		echo "Error" .$sql ."" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>