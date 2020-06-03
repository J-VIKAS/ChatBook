<?php

$conn = mysqli_connect('127.0.0.1','root','');

if (!$conn)
{
    echo 'Not connected to Server';
}

if (!mysqli_select_db($conn,'chatbook'))
{
    echo 'Database Not Selected';
}

$First_Name = $_POST['firstname'];
$Last_Name = $_POST['lastname'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['confirmpassword'];
$Gender = $_POST['gender'];
$DOB = $_POST['dob'];

$sql = "insert into signup (First_Name,Last_Name,Email_or_Mobile,Password,Gender,Date_Of_Birth) values ('$First_Name','$Last_Name','$Email','$Password','$Gender','$DOB');";
echo $sql;

if (!mysqli_query($conn,$sql))
{
    echo '<script>alert("Sorry, Something Went Wrong")</script>';
}
else
{
      echo '<script>alert("You Signed Up Succesfully")</script>';
}

header ("refresh:0; url=index.html");

?>