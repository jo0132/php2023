<div class="cate">
    <h4>최신 글</h4>
    <ul>
    <?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT 5";
        $result = $connect -> query($sql);
    ?>
    <?php foreach($result as $blog){ ?>
<li><a href="blogview.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></li>
    <?php } ?>    
</ul>
</div>