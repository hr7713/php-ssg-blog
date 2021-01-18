<?php
require_once "data.php";
require_once "head.php";
?>

<link rel="stylesheet" href="css/index.css">
<script src="js/index.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-fire"></i>
    </span>
    <span>
      LATEST ARTICLES
    </span>
  </h1>
</section>


<section class="section-latest-articles con-min-width">
    <div class="con">
      <div class="article-list-box">
        <ul>
         <?php for ( $i =4; $i >=1; $i-- ){?>
        <?php
        $articleVarName = "article" . $i;
        $article = $$articleVarName;
        ?>
        <li>
        <h1 class="article-list-box_title"><a href="article_detail_<?=$article["id"]?>.ssghtml.php"><?=$article["title"]?></a></h1>
            <div><?=$article["year"]?></div>
            <script type="text/x-template">
            <?=$article["body"]?>
            </script>
            <div class="toast-ui-viewer"></div>
        </li>        
        <?php } ?>
       </ul>
      </div>
    </div>
  </section>

<?php require_once "foot.php"; ?>