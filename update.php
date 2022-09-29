<?php
include('./db_conn.php');

$u_title = $_POST['title'];
$u_writer = $_POST['writer'];
$u_password= $_POST['password'];
$u_content= $_POST['content'];
$u_email= $_POST['email'];

echo $u_title;
echo $u_writer;
echo $u_password;
echo $u_content ;
echo $u_email;

$query = "updqte bbs set title"

?>