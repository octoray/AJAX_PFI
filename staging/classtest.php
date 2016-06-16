<?php

class MyClass
{
    public $prop1 = "1";
    public $prop2 = "2";

    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function setProperty($newval,$newval2)
    {
        $this->prop1 = $newval;
        $this->prop2 = $newval2;

    }

    public function getProperty()
    {
        return $this->prop1 . "<br />".$this->prop2;
    }
}

// Create two objects
$obj = new MyClass;
echo "<br>";
$obj2 = new MyClass;

// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo "<br>";
echo $obj2->getProperty();

// Set new values for both objects
$obj->setProperty("I'm a new property value!","for prop1");
$obj2->setProperty("I belong to the second instance!","this time for prop2");

// Output both objects' $prop1 value
echo $obj->getProperty();
echo "<br>";
echo $obj2->getProperty();

?>