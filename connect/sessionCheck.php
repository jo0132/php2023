<?php
    if(!isset($_SESSION['memberID'])){
        header("location:../login/login.php");
    }
?>