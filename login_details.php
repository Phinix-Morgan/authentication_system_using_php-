<?php
//connecting to the database //
include'db_connect.php';
//getting the values of post parameters
$user_name = $_REQUEST['user_name'];
$pass_word = $_REQUEST['pass_word'];
//checking weather user registered or not and checking that password is correct or not
$sql = "SELECT * FROM `user` WHERE `user_name` = '$user_name' AND `pass_word` = '$pass_word'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	$message = "Welcome to drop_notes ";
	echo '<script language="javascript">';			
	echo 'alert("'.$message.'");';
	echo 'window.location="http://localhost//file-upload/homepage.html";';
	echo '</script>';	
}
else{
	$message = "The username is not registered or you entered a wrong password ! ";
	echo '<script language="javascript">';			
	echo 'alert("'.$message.'");';
	echo 'window.location="http://localhost//file-upload/login_page.html";';
	echo '</script>';
	// closing connection
mysqli_close($conn);	
}
?>

