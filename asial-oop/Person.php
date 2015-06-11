<?php

class Person 
{
    private $name = '';

    public function setName($name)
    {
    	$this->name = trim($name);
    }

    public function sayHello()
    {
        echo 'こんにちは、' . $this->name . 'です。';
    }

}
