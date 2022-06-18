<?php
    // importing class
    require_once "Dog.php";
    require_once "Cat.php";

    /****************************************************/
        // if the property name is public in the base class Dog,
        // this works. But if it is private it does not. It is so
        // becuase the private property can be accessed only by the
        // class itself. 
        // instanciating the class Dog
        // Here dog1 is the object of class Dog
    /***************************************************/

    //values for the class Dog.php (Creating an object of class Dog)
    $dog = new Dog("Tommy", "Roshan", "1234");
    
    //$dog1 = object
    //new Dog = passing values to its constructor which in this case is Dog.php
    $dog1 = new Dog("Eddie", "Roshan", "12000");
    echo "<h1>Dog </h1>";
    echo $dog->getName();
    echo "<br>";
    echo $dog->getOwner();
    echo "<br>";
    echo $dog->getTag();
    echo "<br>";
    echo $dog->play();

    echo "<br>";
    echo "<br>";

    echo $dog1->getName();
    echo "<br>";
    echo $dog1->getOwner();
    echo "<br>";
    echo $dog1->getTag();
    echo "<br>";
    echo $dog1->play();

/****************************************************/
        // instanciating the class Dog
        // Here dog is the object of class Dog
/****************************************************/

    echo "<h1>Cat </h1>";
    $cat = new Cat("Bummy", "Tobias");
    echo $cat->getName();
    echo "<br>";
    echo $cat->getOwner();
    echo "<br>";
    echo $cat->play();


?>