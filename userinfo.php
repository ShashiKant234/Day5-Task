<?php
$con=mysql_connect('localhost', 'root');
if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}

mysql_select_db($con, 'day5Task');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$query = "insert into userinfo (user, email, mobile, message) 
values ('$user', '$email', '$mobile', '$message')";

echo"$query";

mysqli_query($con, $query);

header('location : index.php');

?>
