<?php

namespace test\src;

class ArticleController
{
    /**
     * @var ArticleRepository
     */
    private $repo;

    public function __construct(ArticleRepository $repository)
    {
        $this->repo = $repository;
    }

    public function list()
    {
        $articles = $this->repo->find();
        $result = [];
        foreach($articles as $article) {
            $result[] = $article->getTitle();
        }
        return $result;
    }
}