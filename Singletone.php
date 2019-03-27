<?php


class mySingleton
{
    public $time;
    static private $instance;

    public static function getInstance() 
    {        
        if(empty(self::$instance))  
            self::$instance = new self;
        
        return self::$instance;
    }    
        
    private function __construct()
    {
        $this->time = microtime(true);
    }
    
    private function __clone(){}
}

    $obj = mySingleton::getInstance();
    echo $obj->time;
    
    echo '<br>';
    sleep(1);
    
    $obj = mySingleton::getInstance();
    echo $obj->time;