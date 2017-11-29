<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $file;
    protected $dataRec;
    public function __construct($file)
    {
        $this->file = $file;
        $data = file($this->file);
        foreach ($data as $line) {
           $this->dataRec [] = new GuestBookRecord($line);
        }
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
        file_put_contents($this->file,'');
        foreach ($this->dataRec as $rec){
            file_put_contents($this->file,$rec,FILE_APPEND );
           // var_dump($rec->__toString());
        }

    }

}