<?php
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $user_psw = $_POST['user_psw'];
    $user_psw = $_POST['user_conf psw'];

    $conn = new mysqli('localhost','root','','shubzz');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into user(user_name,user_email,user_phone,user_psw,number values(?,?,?,?)");
    }
    $stmt->bind_param("ssssi",$user_name,$user_email, $user_phone,$user_psw);
    $stmt->execute();
    echo "registration suscessfully"
    $stmt->close();
    $conn->close();
    ?>
    