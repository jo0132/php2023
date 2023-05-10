<?php
    include "../connect/connect.php";

    for($i=1; $i<300; $i++){
        $regTime = time();

        // $sql = "INSERT INTO board(memberId, boardTitle, boardContents, boardView, regtime) VALUES(1,'게시판 타이틀${i}입니다.','게시판 내용${i}입니다.게시판 내용${i}입니다.게시판 내용${i}입니다.게시판 내용${i}입니다.게시판 내용${i}입니다.','1','$regtime')";
        $sql = "INSERT INTO board(memberID, boardTitle, boardContents, boardView, regTime) VALUES(1, '게시판 타이틀${i}입니다.', '게시판 내용물${i}입니다.게시판 내용물입니다.게시판 내용물${i}입니다.게시판 내용물입니다.게시판 내용물입니다.게시판 내용물입니다.', '1', '$regTime')";

        $connect -> query($sql);
    };
?>