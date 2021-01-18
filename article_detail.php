<?php
require_once "data.php";
require_once "head.php";
?>

<link rel="stylesheet" href="css/about.css">
<script src="js/about.js" defer></script>

<section class="section-title con-min-width">

<h1 class="con">
    <span>
        <i class="fas fa-list-ol"></i>
    </span>
    <span>DETAIL</span>
</h1>
</section>

<section class="section-article-detail con-min-width">
  <div class="con">
  <h1><a href="article_detail_2.ssghtml.php"><?=$selectedArticle["title"]?></a></h1>
            <div><?=$selectedArticle["year"]?></div>
            <div>
              <script type="text/x-template">
              <?=$selectedArticle["body"]?>
              </script>
              <div class="toast-ui-viewer"></div>
            </div>
  </div>
</section>

<?php
require_once "foot.php";
?>



