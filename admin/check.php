<?php
include('../includes/mysqli_connect.php');
session_start();
$user_check=$_SESSION['username'];

$ses_sql = mysqli_query($dbc,"SELECT staff_username FROM staff WHERE staff_username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['staff_username'];

if(!isset($user_check))
{
header("Location: ../index.php");
}
?>