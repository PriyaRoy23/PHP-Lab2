<?php

//print_r($_POST['name']);
$uname = $_POST["name"];
$pass = $_POST['password'];
$DOB = $_POST['dob'];
$Add = $_POST['add'];
$Dept = $_POST['dept'];
$Gender = $_POST['gender'];
echo $uname." ".$pass." ".$DOB." ".$Add." ".$Dept." ".$Gender;

?>