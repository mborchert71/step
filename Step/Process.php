<?php

namespace Step;

class Process {

    static $Root;
    public $Base;
    public $Event;
    public $Release;
    public $Complex;
    public $Product;
    public $Action;
    public $Setting;
    public $Order;
    protected $Class = array(
      "Base" => "Base",
      "Process" => "Process",
      "Event" => "Event",
      "Release" => "Release",
      "Product" => "Product",
      "Action" => "Action",
      "Complex" => "Complex",
      "Setting" => "Setting",
      "Order" => "Order"
    );

    public function ClassExists($class) {
        return in_array($class, $this->Class);
    }

    public function __call($type, $argume) {
        if ($this->ClassExists($type))
            ;
        $class = "Step\\" . $argume[0];
        return new $class($argume[0], $argume);
    }

}

?>
