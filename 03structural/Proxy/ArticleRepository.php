<?php
namespace structural\Proxy;

class ArticleRepository
{
    public function getArticle()
    {
        sleep(4);
        return ['article premier', 'article second'];
    }
}