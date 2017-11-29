<?php

class Article
{
    protected $news;
    public function __construct($new)
    {
        $this->news = $new;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->news;
    }
    public function getNews()
    {
        return $this->news;
    }
}