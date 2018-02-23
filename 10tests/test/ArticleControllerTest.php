<?php

namespace test\test;

use PHPUnit\Framework\TestCase;
use test\src\ArticleController;

class ArticleControllerTest extends TestCase
{
    /**
     * @var ArticleController
     */
    private $controller;

    /**
     * @before
     */
    public function setUpController()
    {
        $repositoryStub = $this->createMock(\test\src\ArticleRepository::class);

        $repositoryStub->method('find')
        ->willReturn([
            new class {public function getTitle(){return 'Les tests unitaires';}},
            new class {public function getTitle(){return 'Les classes anonymes';}},
            new class {public function getTitle(){return 'Vive PHP7.0.25';}},
            new class {public function getTitle(){return 'Phpunit';}},
            new class {public function getTitle(){return 'Design pattern';}}
        ]);
        $this->controller = new ArticleController($repositoryStub);
    }

    public function testList()
    {
        $result = $this->controller->list();
        $this->assertCount(5, $result, 'Le controller doit retourner 5 elements');
    }
}