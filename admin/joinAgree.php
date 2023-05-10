<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?> 
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼수 있습니다.
            </p>
        </div>
        <!-- //intro__inner -->

        <div class="join__inner">
            <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div class="terms">
                    <div class="terms__inner">
[제 1장 총칙]<br>
<br>
제 1조 (목적)<br>
이 이용약관은 A회사(이하 "회사"라 함)가 제공하는 인터넷 서비스(이하 "서비스"라 함)를 이용함에 있어, 회사와 이용자 간의 권리, 의무 및 책임사항 등을 규정함을 목적으로 합니다.<br>
<br>
제 2조 (약관의 효력 및 변경)<br>
<br>
이 이용약관은 회사가 서비스 화면에 게시하거나 기타의 방법으로 이용자에게 공지함으로써 효력이 발생됩니다.<br>
회사는 필요한 경우 이용약관을 변경할 수 있으며, 변경된 약관은 제1항과 동일한 방법으로 공지합니다.<br>
[제 2장 서비스 이용]<br>
<br>
제 3조 (서비스의 이용)<br>
<br>
회사가 제공하는 서비스는 이용자가 인터넷을 통해 이용할 수 있습니다.<br>
서비스 이용을 위해 이용자는 회사의 회원 가입 절차를 따라 가입해야 합니다.<br>
제 4조 (서비스의 변경 및 중단)
<br>
회사는 서비스 운영상 또는 기술상의 필요에 따라 제공하고 있는 서비스의 전부 또는 일부를 변경할 수 있습니다.<br>
회사는 서비스 이용에 필요한 전용선, 서버 등의 설비를 유지보수하거나 교체하는 등의 사유로 인하여 서비스의 전부 또는 일부를 일시 중단할 수 있습니다.<br>
[제 3장 개인정보보호]<br>
<br>
제 5조 (개인정보 수집 및 이용)<br>
<br>
회사는 이용자가 서비스 이용을 위해 제공한 개인정보를 서비스 제공을 위한 목적으로 수집, 이용합니다.<br>
회사는 개인정보 보호를 위해 개인정보 처리방침을 별도로 운영하며, 이를 이용자가 언제든지 열람할 수 있도록 합니다.<br>
                    </div>
                    <div class="agree__inner">
                        <input type="checkbox" name="agree" id="agree" class="agreeCheck"><p>동의 합니다.</p>
                    </div>
                </div>
                <div class="terms">
                    <div class="terms__inner">
[제 1조 개인정보 수집 항목 및 수집 방법]<br>

① 회사는 다음과 같은 개인정보를 수집합니다.<br>

수집 항목: 성명, 생년월일, 연락처, 이메일 주소, 주소 등<br>
수집 방법: 홈페이지 회원 가입, 이벤트 응모, 상담 게시판 등<br>
② 회사는 이용자로부터 개인정보를 수집할 때 개인정보의 수집 목적, 이용 목적, 개인정보 보호를 위한 내용, 개인정보를 제공받는 자 및 제3자 제공 시 위탁 계약 등을 이용자에게 고지하고 동의를 받습니다.<br>
<br>
[제 2조 개인정보의 이용 목적]<br>
<br>
회사는 수집한 개인정보를 다음과 같은 목적으로 이용합니다.
<br>
서비스 제공을 위한 회원 관리 및 인증<br>
상담 및 불만 처리<br>
이벤트 등 행사 안내 및 참여 기회 제공<br>
신규 서비스 및 기타 마케팅 활동에 대한 안내<br>
[제 3조 개인정보 제공 및 위탁]<br>
<br>
① 회사는 이용자의 개인정보를 본래 수집 목적 범위 내에서 사용하며, 이용자의 사전 동의 없이는 목적 외 이용 또는 제3자에게 제공하지 않습니다.<br>
② 회사는 이용자의 개인정보를 안전하게 관리하기 위해 외부 전문 업체에 위탁하여 처리할 수 있으며, 위탁 업체에 대한 내용을 고지하고 이용자의 동의를 받습니다.<br>
<br>
[제 4조 개인정보 보유 및 파기]<br>

① 회사는 이용자의 개인정보를 개인정보의 수집 및 이용목적이 달성된 후 즉시 파기합니다. 단, 이용자의 요청이 있는 경우에는 요청일로부터 3일 이내에 파기합니다.<br>
② 회사는 관련 법령에 따라 일정 기간 동안 개인정보를 보존할 수 있으며, 보존 기간은 다음과 같습니다.<br>
                    </div>
                    <div class="agree__inner">
                        <input type="checkbox" name="agree" id="agree" class="agreeCheck"><p>동의 합니다.</p>
                    </div>
                </div>
                <p class="agreeMsg"></p>
                <a href="joinSave.php" class="btnStyle agreeBtn">동의</a>
            </div>
        </div>
         <!-- //join__inner -->
    </main>
    <!-- //main -->
    <?php include"../include/footer.php"?>

    <script>
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");

        agreeBtn.addEventListener("click",(e) => {
            agreeCheck.forEach((check) => {

                if(check.checked == false){
                    agreeMsg.innerText = "체크박스를 다시한번 확인해주세요!";
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>