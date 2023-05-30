<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
    <link rel="stylesheet" href="../html/assets/css/MAIN/main_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <?php include "../include/head.php" ?>
    <style>
        body:not(.no-js) .img__inner {
            transition: 0.5s ease-out;
            transition-delay: 0.2s;
            position: relative;
            width: auto;
            height: 80vh;
            overflow: hidden;
            clip-path: polygon(0 100%, 100% 100%, 100% 100%, 0 100%);
            visibility: hidden;
            }
            body:not(.no-js) .img__inner img {
            transform: scale(1.3);
            transition: 2s ease-out;
            }
            body:not(.no-js) .animating .img__inner {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            visibility: visible;
            transform: skewY(0);
            }
            body:not(.no-js) .animating img {
            transform: scale(1);
            transition: 4s ease-out;
            }
            body:not(.no-js) .fadeup {
            opacity: 0;
            transition: 0.4s ease-out;
            transform: translateY(40px);
            }
    </style>
</head>
<body>
<?php include "../include/skip.php" ?>
<!-- //skip -->
<?php include "../include/header.php" ?>
<!-- //header -->
    <main id="main">
        <article id="slider">
            <h2 class="blind">슬라이더 영역</h2>
            <div class="slider__inner">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider img1">
                                <div class="slider__info container">
                                    <h3 class="title">PLANTY</h3>
                                    <P class="desc"><em>오래 오래 볼 수있게</em><br> 우리가 자연과 함께 해야하는 이유와 방법을<br>알려주는 사이트입니다.</P>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider img1">
                                <div class="slider__info container">
                                    <h3 class="title">PLANTY</h3>
                                    <P class="desc"><em>오래 오래 볼 수있게</em><br> 우리가 자연과 함께 해야하는 이유와 방법을<br>알려주는 사이트입니다.</P>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider img1">
                                <div class="slider__info container">
                                    <h3 class="title">PLANTY</h3>
                                    <P class="desc"><em>오래 오래 볼 수있게</em><br> 우리가 자연과 함께 해야하는 이유와 방법을<br>알려주는 사이트입니다.</P>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination">
                    </div>
                    <div class="swiper-button">
                        <div class="swiper-button-play"><span class="ir">play</span></div>
                        <div class="swiper-button-stop"><span class="ir">stop</span></div>
                    </div>

                </div>
            </div>
        </article>
        <article id="typo">
            <div class="wrapper">
                <div class="marquee">
                    <div class="marquee__group">
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                        WE HAVE TO BRING THE FOREST AT HOME.
                    </div>
                </div>
            </div>
        </article>
        <section id="card">
            <h2 class="blind">카드 영역</h2>
            <div class="app">
                <div class="cardList container">
                    <button class="cardList__btn btn btn--left">
                        <div class="icon">
                            <svg>
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                        </div>
                    </button>
                    <div class="cards__wrapper">
                        <div class="card current--card">
                            <div class="card__image">
                                <img src="/php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>
                            </div>
                        </div>
                        <div class="card next--card">
                            <div class="card__image">
                                <img src="/php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>

                            </div>
                        </div>
                        <div class="card previous--card">
                            <div class="card__image">
                                <img src="/php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>

                            </div>
                        </div>
                    </div>
                    <button class="cardList__btn btn btn--right">
                        <div class="icon">
                            <svg>
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="infoList">
                    <div class="info__wrapper">
                        <div class="info current--info">
                            <h1 class="text name">공기정화 </h1>
                            <h4 class="text location">Air purification</h4>
                            <p class="text description">It makes the air in the house clean.</p>
                        </div>
                        <div class="info next--info">
                            <h1 class="text name">향기식물</h1>
                            <h4 class="text location">scented plant</h4>
                            <p class="text description">It will fill your home with a healthy scent and make you feel good.</p>
                        </div>
                        <div class="info previous--info">
                            <h1 class="text name">꽃피는 식물</h1>
                            <h4 class="text location">flowering plant</h4>
                            <p class="text description">The flowers of our plants enhance the atmosphere <br>of the house with their beautiful and rich colors.</p>
                        </div>
                    </div>
                </div>
                <div class="app__bg">
                    <div class="app__bg__image current--image">
                        <img src="../php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>

                    </div>
                    <div class="app__bg__image next--image">
                        <img src="../php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>

                    </div>
                    <div class="app__bg__image previous--image">
                        <img src="../php2/html/assets/img/MAIN/card_img01.png" alt="이미지"/>

                    </div>
                </div>
            </div>
            
            
            <svg class="icons" style="display: none;">
                <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='328 112 184 256 328 400'
                                 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
                <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='184 112 328 256 184 400'
                                 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
            </svg>

            <div class="support">
                <a href="https://twitter.com/DevLoop01" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://dribbble.com/devloop01" target="_blank"><i class="fab fa-dribbble"></i></a>
            </div>
        </section>
        <section id="search">
            <h2 class="blind">검색 영역</h2>
            <div class="searchType__wrap">
                <h2>식물을 검색해 보세요</h2>
                <div class="search__box">
                    <form action="../dictionary/dictionary.php?keyword =" method="GET">
                        <input type="text" id="main__searchBox" name="keyword" placeholder="검색 후 클릭 한 번과 엔터를 눌러주세요">
                        <button type="submit">검색</button>
                    </form>
                </div>
                <div class="search__about">
                    <ul>
                        <li><a href="../dictionary/dictionary.php?keyword = '아레카야자'">아레카 야자</a></li>
                        <li><a href="#">관음죽</a></li>
                        <li><a href="#">대나무 야자</a></li>
                        <li><a href="#">인도고무나무</a></li>
                        <li><a href="#">아이비</a></li>
                        <li><a href="#">피닉스 야자</a></li>
                    </ul>
                </div>
        </div>
        </section>
        <section id="brand">
            <h2 class="blind">브랜드가치 영역</h2>
            <div class="brand__wrap">
                <div class="brand__inner">
                    <div class="text__inner">
                        <h2>브랜드 가치</h2>
                        <h3>숲을 우리의<br>
                            집으로 가져와야하는 이유
                        </h3>
                        <p>현대인들은 하루에 대부분을 밀폐된 실내 공간에서 보냅니다. <br>
                            대기오염보다 심각하다는 실내공기. 오염된 공기는 우리의 <br>
                            신체와 정신에까지 심각한 영향을 미치고 있습니다. <br>
                            이것이 우리의 공간에서 식물과 함께 하고자하는 이유입니다.
                        </p>
                        <a href="../brandInt/brandInt.php">자세히 보기</a>
                    </div>
                        <div class='reveal'>
                            <div class="img__inner">
                            <img src='../html/assets/img/MAIN/brand__img01.png'>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "../include/footer_main.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../html/assets/js/card.js"></script>
    <script src="../html/assets/js/slider.js"></script> 
    <script src="../html/assets/js/card02.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.4
        };
        // IMAGE ANIMATION
        let revealCallback = (entries) => {
            entries.forEach((entry) => {
            let container = entry.target;
            if (entry.isIntersecting) {
                container.classList.add("animating");
                return;
            }
            if (entry.boundingClientRect.top > 0) {
                container.classList.remove("animating");
            }
            });
        };
        let revealObserver = new IntersectionObserver(revealCallback, options);
        document.querySelectorAll(".reveal").forEach((reveal) => {
            revealObserver.observe(reveal);
        });
        // TEXT ANIMATION
        let fadeupCallback = (entries) => {
            entries.forEach((entry) => {
            let container = entry.target;
            container.classList.add("not-fading-up");
            if (entry.isIntersecting) {
                container.classList.add("fading-up");
                return;
            }
            if (entry.boundingClientRect.top > 0) {
                container.classList.remove("fading-up");
            }
            });
        };
        let fadeupObserver = new IntersectionObserver(fadeupCallback, options);
            document.querySelectorAll(".fadeup").forEach((fadeup) => {
                fadeupObserver.observe(fadeup);
        });
    }); 

    </script>
</body>
</html>