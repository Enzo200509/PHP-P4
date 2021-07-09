<?php

/**
 * Class muis
 */
abstract class muis {
    public $name;
    /**
     * muis constructor.
     * @param $name
     */
    public function __construct($name) {
        $this->name = $name;
    }
    /**
     * @return string
     */
    abstract public function intro() : string;
}

/**
 * Class razer
 */
class razer extends muis {
    /**
     * @return string
     */
    public function intro() : string {
        return "ik ben een $this->name muis!";
    }
}

/**
 * Class Logitech
 */
class logitech extends muis {
    /**
     * @return string
     */
    public function intro() : string {
        return "Ik ben een $this->name muis!";
    }
}

$razer = new razer("razer");
echo $razer->intro();
echo "<br>";

$logitech = new logitech("logitech");
echo $logitech->intro();
