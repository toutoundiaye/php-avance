<?php 
namespace Instanciation\Factory\http;

class Request
{
    private $queryString;

    static function createFromSuperGlobals(): Request
    {
        $request = new self();

        $request->setQueryString('example=demo');
        return $request;
    }

    private function setQueryString($string)
    {
        $this->queryString = $string;
    }

    public function getQueryString()
    {
        return $this->queryString;
    }
}