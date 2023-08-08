<?php 
//getting the values of post parameters
$email = $_REQUEST['email'];
$user_name = $_REQUEST['username'];
$pass_word = $_REQUEST['password'];
//checking the string size
if(strlen($user_name)>16){
	$message = "Please choose a name less then 16 charecters";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location="http://localhost//file-upload/index.html";';
	echo '</script>';
}
else{
	echo "username confirmeds";
}
?>