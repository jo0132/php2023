<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    }else {
        Header("Location: blog.php");
    }
    
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";


    $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($blogInfo);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="container">
<div class="blog__title" style="background-image: url('../assets/blog/<?=$blogInfo['blogImgFile']?>');">
        <span class="cate"><?=$blogInfo['blogCategory']?></span>
        <h2 class="title"><?=$blogInfo['blogTitle']?></h2>
            
            <div class="info">
        <span class="author"><?=$blogInfo['blogAuthor']?></span>
<span class="date"><?=date('Y-m-d', $blogInfo['blogRegTime'])?></span>
                <div class="modify">
                    <span><a href="#">수정</a></span>
                    <span><a href="#">삭제</a></span>
                </div>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left mt70">
                <h3><?=$blogInfo['blogTitle']?></h3>
                <?=$blogInfo['blogContents']?>
            </div>
            <div class="right">
                <div class="blog__aside">
<?php include "../include/blogTitle.php" ?>
<?php include "../include/blogCate.php" ?>
<?php include "../include/blogLatest.php" ?>
<?php include "../include/blogPopular.php" ?>
<?php include "../include/blogComment.php" ?>
                </div>
            </div>
        </div>
        <!-- //blog__inner -->
        <div class="blog__article">
            <h3>관련글</h3>
<?php include "../include/blogArticle.php" ?>
        </div>
        <!-- //blog__article -->
        <div class="blog__commant">
            <h3>댓글쓰기</h3>
            <div></div>
        </div>
        <!-- //blog__commant -->


    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>