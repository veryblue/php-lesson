<?php

class Person 
{
    private $name = '';
    private $age = '';

    public function __construct($name, $age)
    {
    	$this->setName($name);
    	$this->setAge($age);
    }

    public function __destruct()
    {
    	echo 'さようなら';
    }

    public function setName($name)
    {
    	$this->name = trim($name);
    }

    public function getName()
    {
    	return $this->name;
    }

    public function setAge($age)
    {
    	$this->age = trim($age);
    }

    public function sayHello()
    {
        echo 'こんにちは、' . $this->name . 'です。';
        echo '年齢は' . $this->age . '歳です。'; 

        /*
        if ($this->age !== '') {
        	echo '年齢は' . $this->age . '歳です。'; 
        }
        */

    }

}
