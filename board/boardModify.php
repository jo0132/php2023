<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/session.php"; // 회원정보가 없는 사람은 로그인 페이지로 전환

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP블로그 만들기</title>

    <?php include "../include/head.php" ?> 
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <div class="intro__inner bmStyle center">
            <picture class="intro__images small">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture>
            <h2>게시글 수정하기

            </h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.<br>
                관련된 문의 사항을 여기서 확인하세요!
            </p>
        </div>
        <div class="board__inner container">
            <div class="board__write">
                <form action="boardModifySave.php"name="boardModifySave" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <?php
                            $boardID = $_GET['boardID'];

                            //
                            $sql = "SELECT boardID, boardTitle, boardContents FROM board WHERE boardID = {$boardID}";
                            $result = $connect -> query($sql);
                            
                            if($result){
                                $info = $result -> fetch_array(MYSQLI_ASSOC);

                                echo "<div class='blind'><label for='boardID'>번호</label><input type='text' id='boardID' name='boardID' class='inputStyle' value='".$info['boardID']."'></div>";
                                echo "<div><label for='boardTitle'>제목</label><input type='text' id='boardTitle' name='boardTitle' class='inputStyle' value='".$info['boardTitle']."'></div>";
                                echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='20' class='inputStyle'>".$info['boardContents']."</textarea></div>";
                                echo "<div class='mb50'><label for='boardPass'>비밀번호</label><input type='passward' id='boardPass' name='boardPass' class='inputStyle' autocomplete='off' required placeholder='글을 수정하려면 비밀번호를 입력하셔야 합니다.'></div>";
                            }
                        ?>
                        <!-- <div>
                            <label for="boardTitle">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="inputStyle">
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" id="boardContents" rows="20" class="inputStyle"></textarea>
                        </div> -->

                        <button type="submit" class="btnStyle3">수정하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include"../include/footer.php"?>

</body>
</html>