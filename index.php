<?php

require __DIR__ . '/classes/News.php';

$news = new News(__DIR__ . '/news.txt');
//$gb->append("запись еще \n");
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($r = $_POST['mess']) { // ИЗВЛЕЧЕНИЕ сообщения
       if($r!='del'){
           $r = $r . "\n";
           $news->append($r); // Добавление
       } else {
           $news->del();
       }

    }
}
$news->save();
$data = $news->getArticle();

include __DIR__ . '/templates/index_tmain.php';

