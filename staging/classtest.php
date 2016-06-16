<?php

class MyClass
{
    public $prop1 = "";
    public $prop2 = "";

    public function __construct()
    {
        //echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct()
    {
        //echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function setProperty($newval,$newval2)
    {
        $this->prop1 = $newval * $newval2;
        $this->prop2 = $newval + $newval2;

    }

    public function getProperty()
    {
        return $this->prop1 . " property 2 is: ".$this->prop2;
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
$obj->setProperty(3,5);
$obj2->setProperty(5,5);

// Output both objects' $prop1 value
echo $obj->getProperty();
echo "<br>";
echo $obj2->getProperty();

?>