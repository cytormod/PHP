<?php

// -------OBJECT-ORIENTED PROGRAMMING------

/**
 * From PHP5 onwards you can write PHP in either a procedural or object way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // Properties are attributes that belong to a class

    /**
     * Access Modifiers: public, private, protected 
     * public - can be accessed from anywhere
     * private = can only be accessed from instide the class
     * protected - can only be accessed from inside the class and by inheriting classes
    */
    
    public $name;
    public $email;
    public $password;

    //  A constructor is a method that runs when an object is created

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class

    // This is a setter property, which will set name
    function set_name($name) {
        $this->name = $name;
    }

    // This is a getter property, which will output the name
    function get_name() {
        return $this->name;
    }

}

// Instantiate a user object
// $user1 = new User();
// $user2 = new User();

// $user1->name = 'Sahil';

// var_dump($user1);

// $user1->set_name('Sahil');
// $user2->set_name('Cytor');

// echo $user1->get_name();
// echo $user2->get_name();

// -----------------

$user1 = new User("Sahil", "sahil@2mail", "pass");
$user2 = new User('Cytor', 'cytor@mail', "AES128");

echo $user1->email;
echo $user2->name;

//?-------- Inheritence

class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
    }

    public function getTitle() {
      return $this->title;
    }
  }
  
  $employee1 = new Employee('John','johndoe@gmail.com','123456','Manager');
  echo $employee1->getTitle();
