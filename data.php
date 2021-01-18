<?php
$siteTitle="디자이너";


$article4 = [];
$article4["id"] = 4;
$article4["year"] = "2021";
$article4["title"] = "2화, CSS DINER";
$article4["body"] = <<<EOT
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
$article3["year"]="2021";
$article3["title"]="1화, CSS DINER";
$article3["body"]=<<<EOT
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
$article2["year"]="2021";
$article2["title"]="자바스크립트 사용법";
$article2["body"]=<<<EOT
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
$article1["year"]="2021";
$article1["title"]="자바스크립트 사용법";
$article1["body"]=<<<EOT
# 자바스크립트 사용법
```html
<<!--REPLACE:script-->>
var a =10;
</<!--REPLACE:script-->>
<div class="a"></div>

EOT;

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}