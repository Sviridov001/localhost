<?php

require __DIR__ . '/classes/News.php';

$news = new News(__DIR__ . '/news.txt');

$dataArr = $news->getArticle();
$id=$_GET['id'];
$data = $dataArr[$id-1];

include __DIR__ . '/templates/index_article.php';