<?php
//사용자가 입력한 값을 가지고 와서 변수 대입
    $r_title=$_POST['title'];
    $r_writer=$_POST['writer'];
    $r_password=$_POST['password'];
    $r_email=$_POST['email'];
    $r_content=$_POST['content'];

    $date=date('Y-m-d');

    echo $r_title."<br/>";
    echo $r_writer."<br/>";
    echo $r_password."<br/>";
    echo $r_email."<br/>";
    echo $r_content."<br/>";
    echo $date."<br/>";

//mysql 접속
    $conn = mysqli_connect('localhost','test','1111','testdb');

//쿼리 날리기
    $query = "insert into bbs(title, writer, password, email, content, regDate) value('$r_title','$r_writer','$r_password','$r_email','$r_content','$date')";
    mysqli_query($conn, $query);
    echo "데이터 추가";

//종료
    mysqli_close($conn);

?>