<?php

require __DIR__ . '/GuestBookRecord.php';

const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "gb";
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
class GuestBook
{
    protected $file;
    protected $dataRec;
    protected $link;
    public function __construct($file)
    {
        $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
        $sql = "SELECT  content  FROM items";
        $res = mysqli_query($link, $sql);
        // Отслеживаем ошибки при исполнении запроса
        if( !$res){
            echo 'Ошибка: ' . mysqli_errno($link) . ':' . mysqli_error($link);
        }
        print_r($res);
        while($row = mysqli_fetch_assoc($res)){
            $this->dataRec [] = new GuestBookRecord($row["content"]);
        }
        //$this->file = $file;
        //$data = file($this->file);
/*        foreach ($data as $line) {
           $this->dataRec [] = new GuestBookRecord($line);
        }*/
    }
    public function getData()
    {
       return $this->dataRec;
    }
    public function append($text)
    {
        $this->dataRec [] = new GuestBookRecord($text);
    }
    public function del()
    {
        array_pop($this->dataRec);
    }
    public function save()
    {
       /* file_put_contents($this->file,'');
        foreach ($this->dataRec as $rec){
            file_put_contents($this->file,$rec,FILE_APPEND );
           // var_dump($rec->__toString());
        }*/

    }

}