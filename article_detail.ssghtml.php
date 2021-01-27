<?php
if ( defined('STDIN') ) {
    $_GET['id'] = $argv[1];
}

require_once "data.php";

$articleId = $_GET['id'];
$selectedArticle = &getForPrintArticleById($articleId);
$pageTitle = $selectedArticle['pageTitle'];
$pageThumbUrl = $selectedArticle['pageThumbUrl'];
$pageDescription = $selectedArticle['pageDescription'];
$pageKeywordsStr = $selectedArticle['pageKeywordsStr'];

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

<section class="section-article-detail padding-0-10 con-min-width">
  <div class="con">
  <h1 class="article-list-box__title"><?=$selectedArticle["title"]?></h1>
            <div><?=$selectedArticle["regDate"]?></div>
            <div>
              <script type="text/x-template">
              <?=$selectedArticle["body"]?>
              </script>
              <div class="toast-ui-viewer"></div>
            </div>

            <div class="article-list-box__tags">
            <?=getArticleTagsHtml($selectedArticle["id"])?> 
            </div>

  </div>
</section>

<section class="section-article-reply-box padding-0-10 con-min-width">
  <div class="con">
    <div id="disqus_thread"></div>
<script>
    var disqus_config = function () {

      this.page.url = 'https://b.h0h.shop/article_detail_<?=$articleId?>.html';
      this.page.identifier = 'article_detail_<?=$articleId?>.html';

    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://phpblog-6.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
    
  </div>
</section>


<?php
require_once "foot.php";
?>



