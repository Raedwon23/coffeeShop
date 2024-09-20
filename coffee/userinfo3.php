<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}
else{
	echo "not connected";
}
mysqli_select_db($con,'culture');
$username = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "insert into userinfo3(name,email,mobile,comment)
values('$username','$email','$mobile','$comment')";

mysqli_query($con, $query);
header('location:contact.php');
?>  

