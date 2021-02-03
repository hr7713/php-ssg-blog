<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너";
$siteDescription = "디자이너의 기술 블로그 입니다.";
$siteKeywordsStr = "CSS, CSSDINER";
$siteName = "DESIGNER";
$siteThumbUrl = "https://hr7713.github.io/web-res/blog/img/main.png";

// 태그정보 시작
$tagInfos = [
  "CSS" => [
    "pageThumbUrl" => "https://hr7713.github.io/web-res/blog/img/cssdiner.png",
    //"pageDescription" => "css 선택자 프로그램, cssdiner 관련 강좌 입니다."
  ],
];
// 태그정보 끝

$article5 = [];
$article5["id"] = 5;
$article5["regDate"] = "2021-01-12";
$article5["title"] = "5화, CSS DINER";
$article5["tags"] = ["CSS", "CSSDINER"];
$article5["img"] = <<<'EOT'
<img src="https://hr7713.github.io/web-res/cssdiner/img/05.gif" alt="">
EOT;
$article5["body"] = <<<'EOT'
# 선택자 #id A
```html

<question>Select the pickle on the fancy plate</question>

<div class="table">
<bento>
  <orange />
</bento>
<plate id="fancy">
  <pickle />
</plate>
<plate>
  <pickle />
</plate>
</div>

<answer>#fancy pickle</answer>

```

EOT;

$article4 = [];
$article4["id"] = 4;
$article4["regDate"] = "2021-01-12";
$article4["title"] = "4화, CSS DINER";
$article4["tags"] = ["CSS", "CSSDINER"];
$article4["img"] = <<<'EOT'
<img src="https://hr7713.github.io/web-res/cssdiner/img/04.gif" alt="">
EOT;
$article4["body"] = <<<'EOT'
# 선택자 A B 
```html

<question>Select the apple on the plate</question>

<div class="table">
<bento />
<plate>
  <apple />
</plate>
<apple />
</div>

<answer>plate apple</answer>

```

EOT;


$article3 = [];
$article3["id"] = 3;
$article3["regDate"] = "2021-01-11";
$article3["title"] = "3화, CSS DINER";
$article3["tags"] = ["CSS", "CSSDINER"];
$article3["img"] = <<<'EOT'
<img src="https://hr7713.github.io/web-res/cssdiner/img/03.gif" alt="">
EOT;
$article3["body"] = <<<'EOT'
# 선택자 #id 
```html

<question>Select the fancy plate</question>

<div class="table">
<plate id="fancy" />
<plate />
<bento />
</div>

<answer>#fancy</answer>

```

EOT;

$article2=[];
$article2["id"] = 2;
$article2["regDate"] = "2021-01-11";
$article2["title"]="2화, CSS DINER";
$article2["tags"] = ["CSSDINER", "CSS"];
$article2["img"] = <<<'EOT'
<img src="https://hr7713.github.io/web-res/cssdiner/img/02.gif" alt="">
EOT;
$article2["body"]=<<<'EOT'
# 선택자 A
```html

<question>Select the bento boxes</question>

<div class="table">
<bento />
<plate />
<bento />
</div>

<answer>bento</answer>

```

EOT;

$article1=[];
$article1["id"] = 1;
$article1["regDate"] = "2021-01-11";
$article1["title"]="1화, CSS DINER";
$article1["tags"] = ["CSSDINER", "CSS"];
$article1["img"] = <<<'EOT'
<img src="https://hr7713.github.io/web-res/cssdiner/img/01.gif" alt="">
EOT;
$article1["body"]=<<<'EOT'
# 선택자 A
```html

<question>Select the plates</question>

<div class="table">
<plate />
<plate />
</div>

<answer>plate</answer>

```

EOT;





// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}