<?php
class Animal {
  public static function makeSound()
  {
    echo "Animal";
  }
 public static function vocalize() 
 {
    echo self::makeSound();
  }
}
  class Dog extends Animal 
  {
  public static function makeSound()
  {
    echo "Dog";
  }
}
Dog::vocalize();