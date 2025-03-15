<?php

class Car {
    // Think property as the same thing as a variable, and the method is same thing as a function

    // We have to create forst visibility Modifiers

    // ? Properities
    private $brand;
    private $color;
    public $vehicleType = "car";
    //"private" It means only this class "CAR" has the access for this properties.

    // "protected" It means not just this class here but a another child class which extends to this class has access to this property here.

    // "public" Which means like everyone has access to this information here.


    //CONSTRUCTOR
    public function __construct($brand, $color = "none")// parameters are here are just the placeholders.
    {
    $this->brand = $brand; //2nd $brand is the data that we passed into the Object when we create for the first time, which is $brand parameter, and we take that parameter and then we put it to the equal to the property inside the class which is, the $brand outside of the function.

    // let's assign the data to the color Property

    $this->color = $color;
    }

    // Getter & Setter methods

    // Getter Method
    //We are going to create a method that is going to access a property and we are going to create a method that is going to change the property.

    public function getBrand() {
        return $this->brand;
        
        // Check echo $car01->getBrand(); in OOP.php file
    }


    // Setter Method

    // Setter: It helps to change the value, which has already been set.

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $allowedColors = [
            'red', 'blue', 'yellow', 'green'
        ];
         
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        } else {

        }
        $this->color = $color;
    }

    // Method

    public function getCarInfo(/*$brand, $color*/){
        return "Brand: ".$this->brand.", Color: ".$this->color;
    }

}

// $car01 = new Car("Volvo", "Black");
// $car02 = new Car("BMW", "Brown");
// echo $car01->getCarInfo;
// echo $car01->vehicleType;

