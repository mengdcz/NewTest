<?php

namespace MyTest;

class MyTest{


    public function __construct()
    {
        echo 'MyTest construct';
    }

    public static function getInstance(){
        static $_instance = null;
        if (empty($_instance)){
            return new static();
        }
    }

    public function getTest(){
        echo 'MyTest getTest';
    }
}