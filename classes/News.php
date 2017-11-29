<?php

require __DIR__ . '/Article.php';

class News
{
    protected $file;
    protected $newsArticle;
    public function __construct($file)
    {
        $this->file = $file;
        $data = file($this->file);
        foreach ($data as $line) {
           $this->newsArticle [] = new Article($line);
        }
    }
    public function getArticle()
    {
       return $this->newsArticle;
    }
    public function append($text)
    {
        $this->newsArticle [] = new Article($text);
    }
    public function del()
    {
        array_pop($this->newsArticle);
    }
    public function save()
    {
        file_put_contents($this->file,'');
        foreach ($this->newsArticle as $rec){
            file_put_contents($this->file,$rec,FILE_APPEND );
           // var_dump($rec->__toString());
        }

    }

}