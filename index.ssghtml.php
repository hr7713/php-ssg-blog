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
          <li>
            <h1><a href="article_detail_1.ssghtml.php"><?=$article1["title"]?></a></h1>
            <div><?=$article1["year"]?></div>
            <script type="text/x-template">
            <?=$article1["body"]?>
            </script>
            <div class="toast-ui-viewer"></div>
          </li>
          <li>
            <h1><a href="article_detail_2.ssghtml.php"><?=$article2["title"]?></a></h1>
            <div><?=$article2["year"]?></div>
            <div>
              <script type="text/x-template">
              <?=$article2["body"]?>
              </script>
              <div class="toast-ui-viewer"></div>
            </div>
          </li>

          <li>
            <h1 class="title"><?=$article3["title"]?></h1>
            <div class="reg-date"><?=$article3["year"]?></div>
            <div class="body">
              <script type="text/x-template">
              <?=$article3["body"]?>
              </script>
              <div class="toast-ui-viewer"></div>
            </div>
          </li>
          <li>
            <h1 class="title"><?=$article4["title"]?></h1>
            <div class="reg-date"><?=$article4["year"]?></div>
            <div class="body">
              <script type="text/x-template">
              <?=$article4["body"]?>
              </script>
              <div class="toast-ui-viewer"></div>
            </div>
          </li>
        
        </ul>
      </div>
    </div>
  </section>

<?php require_once "foot.php"; ?>