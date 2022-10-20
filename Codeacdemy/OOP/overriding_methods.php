<?php
/*
Sometimes, we want to change how methods behave for subclasses from the original parent definition. This is called overriding a method. 
To do this, define a new method within the subclass with the same name as the parent method.
*/

class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
  function getInfo(){
    return parent::getInfo() . " I like my milk this way.";
  }



}


$milk = new Milk();
echo $milk->getInfo();
  