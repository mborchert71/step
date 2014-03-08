<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Step;

/**
 * Description of Process
 *
 * @package
 */
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

    public function __call($type, $arguments) {
        if ($this->ClassExists($type))
            ;
        $class = "Step\\" . $arguments[0];
        return new $class($arguments[0], $arguments);
    }

}

?>
