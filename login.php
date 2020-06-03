<?php
session_start();
$conn = mysqli_connect('127.0.0.1','root','');

if (!$conn)
{
    echo 'Not connected to Server';
}

if (!mysqli_select_db($conn,'chatbook'))
{
    echo 'Database Not Selected';
}

$Email = $_POST['email'];
$Password = $_POST['password'];

$sql = "select * from signup where Email_or_Mobile = '$Email' and Password = '$Password';";
$result = mysqli_query($conn,$sql);
$Values = mysqli_fetch_array($result);

if (!mysqli_query($conn,$sql))
{
    echo '<script>alert("Sorry, Something Went Wrong")</script>';
    echo $sql;
    header ("refresh:0; url=login.html");
}
else
{
    if ($Values['Email_or_Mobile'] == $Email && $Values['Password'] == $Password ){
        $_SESSION['First_Name'] = $Values['First_Name'];
        $_SESSION['Last_Name'] = $Values['Last_Name'];
        header ("refresh:0; url=loggedin.php");
    }
}
?>