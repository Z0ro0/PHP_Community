<?php
    //1. mysql 접속
    include('./db_conn.php');
    //2. $query = bbs의 모든 데이터 가져오기
    $query = "select * from bbs";
    // 쿼리날리기
    $result = mysqli_query($conn,$query);

    $re = mysqli_fetch_row($result);

    echo $re[0]."<br/>";
    echo $re[1]."<br/>";
    echo $re[2]."<br/>";
    echo $re[3]."<br/>";
    echo $re[4]."<br/>";
    echo $re[5]."<br/>";
    //3. 종료
    mysqli_close($conn);


?>