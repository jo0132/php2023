<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>

    <?php include "../include/head.php" ?> 
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="login__inner">
             <h2>로그인</h2>
             <p>로그인을 하시면 게시글 및 댓글 작성이 가능합니다.<br>회원가입을 하면 로그인이 가능합니다.<br>admin@admin.com/1234</p>
             <div class="login__form btStyle bmStyle" >
                <form action="loginSave.php" name="loginSave" method = "post">
                    <fieldset>
                        <legend class="blind">로그인 영역</legend>
                        <div>
                            <label for="youEmail" class="required blind">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일" required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="비밀번호" required>
                        </div>
                        <button type="submit" class="btnStyle2 mt20">로그인</button>
                    </fieldset>
                </form>
             </div>
             <div class="login__footer">
                <ul class="listStyle">
                    <li>회원가입을 하지 않았다면 회원가입을 먼저해주세요!<a href="join/join.html">회원가입</a></li>
                    <li>아이디가 기억나지 않는다면? <a href="#">아이디 찾기</a></li>
                    <li>비밀번호가 기억나지 않는다면? <a href="#">비밀번호 찾기</a></li>
                </ul>
             </div>
        </div>
         <!-- //login__inner -->

         
        <!-- 
        <div class="intro__inner"></div>    각페이지 소개 배너
        <div class="join__inner"></div>     회원가입
        <div class="login__inner"></div>    로그인

        <div class="intro__inner"></div>    
        <div class="join__inner"></div>    
        <div class="sliders__inner"></div>
        <div class="banners__inner"></div>
        <div class="cards__inner"></div>
        <div class="images__inner"></div>
        <div class="ads__inner"></div>
        <div class="texts__inner"></div>
        <div class="login__inner"></div>
        <div class="blog__inner"></div> -->
    </main>
    <!-- //main -->
    <?php include"../include/footer.php"?>
</body>
</html>