<?php
namespace Instanciation\Singleton;

final class SingletonDemo
{
    /**
     * keep track of single instance
     * @var SingletonDemo
     */

    private static $instance;
     /**
      * SingletonDemo constructor
      * private to prevent anyone to create instance
      */
    private function __construct()
     {

     } 
     /**
      * Manage single instantiation
      *multiple call result in reuse of same object
      *
      * @return SingletonDemo
      */
    public static function getInstance()
     {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
     }
}