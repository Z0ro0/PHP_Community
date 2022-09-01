<?php
    $r_title = $_POST['title'];
    $r_writer= $_POST['writer'];
    $r_password= $_POST['password'];
    $r_email= $_POST['email'];
    $r_content= $_POST['content'];

    $date = date('Y-m-d');

    echo $r_title."</br>";
    echo $r_writer."</br>";
    echo $r_password."</br>";
    echo $r_email."</br>";
    echo $r_content."</br>";
    echo $date."</br>";
?>