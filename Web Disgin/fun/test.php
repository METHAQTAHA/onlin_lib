<?php
include '../connect.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$sql="SELECT * FROM users WHERE User_Name='$n1' and Password='$n2' ";
$result = $conn->query($sql);
$count =$result->num_rows;
if($count==0){
    header('Location:http://localhost:88/Web%20Disgin/login1.php?');
    exit();
}
if($count!==0){
    header('Location:http://localhost:88/Web%20Disgin/final.php?');
}
?>