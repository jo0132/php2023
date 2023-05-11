<?php
    include "../connect/connect.php";

    //변수 설정
    $type = $_POST['type'];
    

    if($type == "emailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail'])); 
        $sql = "SELECT adminEmail FROM adminmembers WHERE adminEmail = '{$youEmail}'";
    }
    if($type == "isNickCheck"){
        $youNick = $connect -> real_escape_string(trim($_POST['youNick']));
        $sql = "SELECT adminNick FROM adminmembers WHERE adminNick = '{$youNick}'";
    }

    $result = $connect -> query($sql);
    $jsonResult = "bad";

    //데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));
?>
