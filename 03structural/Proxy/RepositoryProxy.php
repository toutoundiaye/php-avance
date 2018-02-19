<?php
namespace structural\Proxy;

class RepositoryProxy
{
    private $repository;
    private $cache;

    public function __construct($entity)
    {
        $this->repository = new ArticleRepository();
        $this->cache = [];
    }

    public function getList()
    {
        if(empty($this->cache)) {
            $this->cache = $this->repository->getArticle();
        }
        return $this->cache;
    }
}