<?php
    include "../connect/connect.php";
    include "joinSave.php";

    $jsonResult = "bad";

    if(isset($_POST['type'])){
        $type = $_POST['type'];

        if($type == "isEmailCheck"){
            if(isset($_POST['youEmail'])){
                $youEmail = $connect->real_escape_string(trim($_POST['youEmail']));
                $sql = "SELECT adminEmail FROM adminmembers WHERE adminEmail = '{$youEmail}'";
            }
        }

        if($type == "isNickCheck"){
            if(isset($_POST['youNick'])){
                $youNick = $connect->real_escape_string(trim($_POST['youNick']));
                $sql = "SELECT adminNick FROM adminmembers WHERE adminNick = '{$youNick}'";
            }
        }

        if(!empty($sql)){
            $result = $connect->query($sql);
            if($result->num_rows == 0){
                $jsonResult = "good";
            }
        }
    }

    echo json_encode(array("result" => $jsonResult));
?>
