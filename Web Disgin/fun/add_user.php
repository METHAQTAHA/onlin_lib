<?php
include '../connect.php';
$User_Name=$_GET['User_Name'];
$Full_Name=$_GET['Full_Name'];
$Phone_Nu=$_GET['Phone_Nu'];
$Password=$_GET['Password'];
$Reset_Password=$_GET['Reset_Password'];
if ($Password !== $Reset_Password){
    header('Location:http://localhost:88/Web%20Disgin/acount.php?re=1');
    exit();  
}
$Stage=$_GET['Stage'];
$sql= "INSERT INTO users(User_Name,Full_Name,Phone_Nu,Password,Reset_Password,Stage)
VALUES('$User_Name','$Full_Name ','$Phone_Nu','$Password','$Reset_Password ','$Stage')";
$result2=$conn->query($sql);
header('Location:http://localhost:88/Web%20Disgin/final.php');
?>