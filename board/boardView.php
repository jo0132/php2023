<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";  // 회원정보가 없는 사람은 로그인 페이지로 전환

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

    <main id="main" class="container">
        <div class="intro__inner center">
            <picture class="intro__images small">
                <img src="../assets/img/join01.png" alt="게시판 이미지">
            </picture>
            <h2>게시판 보기</h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.<br>
                관련된 문의 사항을 여기서 확인하세요!
            </p>
        </div>
        <!-- //intro__inner -->

        <div class="board__inner">
            <div class="board__View">
                <table>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 80%;">
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>게시판 제목입니다.</td>
                        </tr>
                        <tr>
                            <th>동록자</th>
                            <td>노지영</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023-04-24</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>99</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>
                            </td>
                        </tr> -->

<?php
if(isset($_GET['boardID'])) {
    $boardID = $_GET['boardID'];

    // 보드뷰 + 1
    $sql = "UPDATE board SET boardView = boardView +1 WHERE boardID = {$boardID}";
    $connect -> query($sql); 


    // echo $boardID;
    $sql = "SELECT b.memberID, b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    
    $result = $connect -> query($sql);


    if($result){
        
        $count = $result ->num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                echo "<th>제목</th>";
                echo "<td>".$info['boardTitle']."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>등록자</th>";
                echo "<td>".$info['youName']."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>등록일</th>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>조회수</th>";
                echo "<td>".$info['boardView']."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>내용</th>";
                echo "<td>".$info['boardContents']."</td>";
                echo "</tr>";
            };
        }else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
    } else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
}
?>
                    </tbody>
                </table>
            </div>
            <div class="board__btn mb70">
                <?php


                echo '로그인한 사용자: ' . $_SESSION['memberID'] . '<br>';
                echo '게시물 작성자: ' . $info['memberID'] . '<br>';

                if($_SESSION['memberID'] === $info['memberID']){
                ?>

                <a href="boardModify.php?boardID=<?= isset($_GET['boardID']) ? $_GET['boardID'] : '' ?>" class="btnStyle3">수정하기</a>
                <a href="boardRemove.php?boardID=<?= isset($_GET['boardID']) ? $_GET['boardID'] : '' ?>" class="btnStyle3" onclick="return confirm('정말 삭제하시나요?')">삭제하기</a>

                <?php
                } 
                ?>

                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>

    </main>
    <!-- //main -->


    <?php include"../include/footer.php"?>
    <!-- //footer -->
</body>
</html>