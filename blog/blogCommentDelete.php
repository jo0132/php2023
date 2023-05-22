<?php
 include "../connect/connect.php";
 $commentPass = $_POST['commentPass'];
 $commentID = $_POST['commentID'];
 $sql = "DELETE FROM blogcomment WHERE commentID = '$commentID' AND commentPass = '$commentPass'";
 $result = $connect -> query($sql);
 echo json_encode(array("info" => $sql));
?>