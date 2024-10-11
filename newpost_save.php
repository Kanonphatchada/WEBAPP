<?php
session_start();
$cat_id=$_POST['category'];
$top=$_POST['topic'];
$comm=$_POST['comment'];
$user_id=$_SESSION['user_id'];

$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

$sql="INSERT INTO post (cat_id, title, content, user_id,post_date)
 VALUES ('$cat_id','$top','$comm','$user_id',NOW())";
$conn->exec($sql);
$conn=null;
header("location:index.php");
die();
?>

