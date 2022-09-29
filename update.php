<?php
include('./db_conn.php');
$_idx = $_POST['a'];
//select 쿼리 날려서
$query = "select * from bbs where id=$_idx";
//mysqli_query()
$result = mysqli_query($conn, $query);
$re = mysqli_fetch_row($result);
//password가 들어있는 배열 방을 출력
echo "password".$re[3];




$_title = $_POST['title'];
$_writer = $_POST['writer'];
$_password= $_POST['password'];
$_content= $_POST['content'];
$_email= $_POST['email'];
$_password = $_POST['password'];

echo "사용자가 입력한 비번 ".$_password;



if($re[3] == $_password){
    $query = "update bbs set 
            title='$_title', writer='$_writer', content='$_content', email='$_email'
            where id=$_idx";

    mysqli_query($conn, $query);
    echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}
?>