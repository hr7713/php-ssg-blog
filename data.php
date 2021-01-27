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
    "flex" => [
        "pageThumbUrl" => "https://hr7713.github.io/web-res/blog/img/cssdiner.png",
        //"pageDescription" => "css 선택자 프로그램, cssdiner 관련 강좌 입니다."
    ],
   
];
// 태그정보 끝


$article4 = [];
$article4["id"] = 4;
$article4["regDate"] = "2021-01-11";
$article4["title"] = "2화, CSS DINER";
$article4["tags"] = ["CSSDINER", "CSS"];
$article4["body"] = <<<'EOT'
# 선택자 #id | A B | #id A
```html
3.
<not-element-just-cssdiner-title-3 class="Select-the-fancy-plate #id">하늘색 테두리 접시 1개 반응</not-element-just-cssdiner-title-3>

<div class="table">
<plate id="fancy" />
<plate />
<bento />
</div>

<not-element-just-cssdiner-answer-3 class="Select-the-fancy-plate #id">#fancy</not-element-just-cssdiner-answer-3>

4.
<not-element-just-cssdiner-title-4 class="Select-the-apple-on-the-plate A B">접시 위 사과 반응</not-element-just-cssdiner-title-4>

<div class="table">
<bento />
<plate>
  <apple />
</plate>
<apple />
</div>

<not-element-just-cssdiner-answer-4 class="Select-the-apple-on-the-plate A B">plate apple</not-element-just-cssdiner-answer-4>

5.
<not-element-just-cssdiner-title-5 class="Select-the-pickle-on-the-fancy-plate #id A">하늘색 테두리 접시 위 피클 반응</not-element-just-cssdiner-title-5>

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

<not-element-just-cssdiner-answer-5 class="Select-the-pickle-on-the-fancy-plate #id A">#fancy pickle</not-element-just-cssdiner-answer-5>






```

EOT;

$article3=[];
$article3["id"] = 3;
$article3["regDate"] = "2021-01-11";
$article3["title"]="1화, CSS DINER";
$article3["tags"] = ["CSSDINER", "CSS"];
$article3["body"]=<<<'EOT'
# 선택자 A
```html
1.
<not-element-just-cssdiner-title-1 class="Select-the-plates A">접시 2개 반응</not-element-just-cssdiner-title-1>

<div class="table">
<plate />
<plate />
</div>

<not-element-just-cssdiner-answer-1 class="Select-the-plates A">plate</not-element-just-cssdiner-answer-1>

2.
<not-element-just-cssdiner-title-2 class="Select-the-bento-boxes A">도시락 박스 2개 반응</not-element-just-cssdiner-title-2>

<div class="table">
<bento />
<plate />
<bento />
</div>

<not-element-just-cssdiner-answer-2 class="Select-the-bento-boxes A">bento</not-element-just-cssdiner-answer-2>





```

EOT;

$article2=[];
$article2["id"] = 2;
$article2["regDate"] = "2021-01-10";
$article2["title"]="자바스크립트 사용법";
$article2["tags"] = ["HTML", "JS"];
$article2["body"]=<<<'EOT'
# HTML h1 사용법
```codepen
https://codepen.io/hr7713/embed/GRjYRGG?height=500&theme-id=light&default-tab=html,result
```
```youtube
OMBjyeSJLqY
```

EOT;



$article1=[];
$article1["id"] = 1;
$article1["regDate"] = "2021-01-10";
$article1["title"]="자바스크립트 사용법";
$article1["tags"] = ["HTML", "JS"];
$article1["body"]=<<<'EOT'
# 자바스크립트 사용법
```html
<<!--REPLACE:script-->>
var a =10;
</<!--REPLACE:script-->>
<div class="a"></div>

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