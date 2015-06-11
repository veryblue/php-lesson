<?php

class Person 
{
    public $name = '';

    public function sayHello()
    {
        echo 'こんにちは、' . $this->name . 'です。';
    }

}
