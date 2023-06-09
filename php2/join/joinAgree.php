<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 약관동의</title>
 <!-- CSS -->
 <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1"> 
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="mt120 container">
        <div class="main__container">
            <div class="intro__inner mb40">
                <h2 class="intro__h2">PLANTY</h2>
                <h4>회원가입</h4>
            </div>
            <!-- join__inner -->
            <div class="join__inner">
                <div class="join__form">
                    <form action="join.php" name="joinAgree" method="post">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
                            <div class="agree__text">
                                <h4>이용약관 동의</h4>  
                                <div class="agree__desc">
                                    <h1>이용약관</h1>
                                    <h2>제1조(목적)</h2>
                                    <p>본 약관은 회사(또는 웹사이트)와 이용자 간의 서비스 이용에 관한 권리와 의무 및 책임 사항을 규정함을 목적으로 합니다.</p><br>
                                    
                                    <h2>제2조(정의)</h2>
                                    <p>본 약관에서 사용하는 용어의 정의는 다음과 같습니다.</p><br>
                                    <ul>
                                      <li>회사: 서비스를 제공하는 주체</li>
                                      <li>이용자: 서비스를 이용하는 개인 또는 법인</li>
                                      <li>서비스: 회사가 제공하는 모든 서비스</li>
                                    </ul>
                                    
                                    <h2>제3조(이용계약의 체결)</h2>
                                    <p>이용자는 회사의 서비스 이용을 위해 이용약관에 동의해야 합니다.</p><br>
                                    
                                    <h2>제4조(서비스 이용)</h2>
                                    <p>이용자는 회사의 서비스 이용 시 다음 사항을 준수해야 합니다.</p><br>
                                    <ul>
                                      <li>회사의 서비스 이용 목적에 맞게 이용</li>
                                      <li>타인의 정보를 수집, 이용, 유포하는 등의 불법적 행위를 하지 않음</li>
                                      <li>서비스 이용과 관련하여 법령, 약관, 이용안내 등 회사가 공지하는 사항을 준수</li>
                                    </ul>
                                    
                                    <h2>제5조(서비스의 변경, 중단)</h2>
                                    <p>회사는 서비스의 변경, 중단 등의 필요한 경우 이용자에게 사전 공지 후 이를 실행할 수 있습니다.</p><br>
                                    
                                    <h2>제6조(면책조항)</h2>
                                    <p>회사는 다음과 같은 경우 책임을 지지 않습니다.</p><br>
                                    <ul>
                                      <li>이용자의 귀책 사유로 인한 서비스 이용 장애</li>
                                      <li>제3자의 불법적인 서비스 이용으로 인한 손해</li>
                                      <li>천재지변 등의 불가항력으로 인한 서비스 중단</li>
                                    </ul>
                                    <h2>제7조(정의)</h2>
                                    <p>본 약관에서 사용하는 용어의 정의는 다음과 같습니다.</p><br>
                                    <ul>
                                      <li>회사: 서비스를 제공하는 주체</li>
                                      <li>이용자: 서비스를 이용하는 개인 또는 법인</li>
                                      <li>서비스: 회사가 제공하는 모든 서비스</li>
                                    </ul>
                                    
                                    <h2>제8조(이용계약의 체결)</h2>
                                    <p>이용자는 회사의 서비스 이용을 위해 이용약관에 동의해야 합니다.</p><br>
                                    
                                    <h2>제9조(서비스 이용)</h2>
                                    <p>이용자는 회사의 서비스 이용 시 다음 사항을 준수해야 합니다.</p><br>
                                    <ul>
                                      <li>회사의 서비스 이용 목적에 맞게 이용</li>
                                      <li>타인의 정보를 수집, 이용, 유포하는 등의 불법적 행위를 하지 않음</li>
                                      <li>서비스 이용과 관련하여 법령, 약관, 이용안내 등 회사가 공지하는 사항을 준수</li>
                                    </ul>
                                    
                                    <h2>제10조(서비스의 변경, 중단)</h2>
                                    <p>회사는 서비스의 변경, 중단 등의 필요한 경우 이용자에게 사전 공지 후 이를 실행할 수 있습니다.</p><br>
                                    
                                    <h2>제11조(면책조항)</h2>
                                    <p>회사는 다음과 같은 경우 책임을 지지 않습니다.</p><br>
                                    <ul>
                                      <li>이용자의 귀책 사유로 인한 서비스 이용 장애</li>
                                      <li>제3자의 불법적인 서비스 이용으로 인한 손해</li>
                                      <li>천재지변 등의 불가항력으로 인한 서비스 중단</li>
                                    </ul>
                                </div>
                                <label for="myCheckbox">이용약관 동의 및 개인정보 처리방침 (필수)</label>
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" value="isChecked" required>
                            </div>
                            <button type="submit"class="btnStyle4">다음</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->


    <?php include "../include/footer_min.php" ?>
    <!-- //footer -->
    
</body>
</html>