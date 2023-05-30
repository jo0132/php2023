<div class="cate list2">
    <h4>인기 글</h4>
    <ul>
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogView DESC LIMIT 5";
        $result = $connect -> query($sql);
?>
<?php foreach($result as $blog){ ?>
    <li>
    <a href="blogview.php?blogID=<?=$blog['blogID']?>">
        <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
        <span><?=$blog['blogTitle']?></span>
    </a>
    </li>
<?php } ?>    
    </ul>
</div>