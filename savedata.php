<?php 
 $get_name = $_POST['sname'];
 $get_address = $_POST['saddress'];
 $get_class = $_POST['class'];
 $get_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("error");
$sql = "insert into student(sname,saddress,sclass,sphone) values('{$get_name}','{$get_address}','{$get_class}','{$get_phone}') ";
$result=mysqli_query($conn,$sql) or die("error query");



header("location:http://localhost/crud/index.php");
mysqli_close($conn);
?>