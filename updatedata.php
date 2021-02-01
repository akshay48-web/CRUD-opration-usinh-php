<?php
$get_id = $_POST['sid'];
$get_name = $_POST['sname'];
 $get_address = $_POST['saddress'];
 $get_class = $_POST['sclass'];
 $get_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("error");
$sql = "update student set sname= '{$get_name}',saddress= '{$get_address}',sclass= '{$get_class}',sphone= '{$get_phone}' where sid = {$get_id}";
$result=mysqli_query($conn,$sql) or die("error query");



header("location:http://localhost/crud/index.php");
mysqli_close($conn);

?>