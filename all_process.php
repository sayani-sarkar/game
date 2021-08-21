<?php
session_start();
include_once 'config.php';
$name = "";
$score = "";

$sl = 0;
$edit_state = false;
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $score = $_POST['score'];
  
 $sql = "INSERT INTO player (name,score) VALUES ('$name','$score')";
 if (mysqli_query($conn, $sql)) { 
   $_SESSION['message'] = "Data Saved Successfully";
    header("Location: updatescore.php");
   } else {
    mysqli_close($conn);
   }
   
}
// For updating records
if (isset($_POST['update'])) {
  $sl = $_POST['sl'];
  $name = $_POST['name'];
  $score = $_POST['score'];
  
  mysqli_query($conn, "UPDATE player SET name='$name', score='$score' WHERE sl=$sl");
  $_SESSION['message'] = "Data Updated Successfully";
  header('location: updatescore.php');
}
// For deleteing records
if (isset($_GET['delete'])) {
  $sl = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM player WHERE sl=$sl");
  $_SESSION['message'] = "Data Deleted Successfully";
  header('location:updatescore.php');
}
?>