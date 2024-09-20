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
$comments = $_POST['comments'];


$query = "insert into userinfo1(name,email,mobile,comments)
values('$username','$email','$mobile','$comments')";

mysqli_query($con, $query);
header('location:index.php');
?>  

