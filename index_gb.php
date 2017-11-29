<?php

require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook(__DIR__ . '/data.txt');
//$gb->append("запись еще \n");
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($r = $_POST['mess']) { // ИЗВЛЕЧЕНИЕ сообщения
       if($r!='del'){
           $r = $r . "\n";
           $gb->append($r); // Добавление
       } else {
           $gb->del();
       }

    }
}
$gb->save();
$data = $gb->getData();

include __DIR__ . '/templates/index_tgb.php';

