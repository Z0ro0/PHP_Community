<?php
include('./db_conn.php');

$_idx = $_POST['a'];
$_title = $_POST['title'];
$_writer = $_POST['writer'];
$_password= $_POST['password'];
$_content= $_POST['content'];
$_email= $_POST['email'];
$_password = $_POST['passwprd'];

echo $_title;
echo $_writer;
echo $_password;
echo $_content ;
echo $_email;
echo "a".$_idx;

$query = "update bbs set 
            title='$_title', writer='$_writer', content='$_content', email='$_email'
            where id=$_idx";

mysqli_query($conn, $query);
echo "수정되었습니다";

?>