<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step;
/**
 * Description of _call
 *
 * @package
 */
class _call {
    public $class;
    public $method;
    public $arguments;
    public function __construct($class,$method,_properties $arguments=null) {
        //if strict if Registry knows class and method
        $this->class= $class;
        $this->method=$method;
        $this->arguments = $arguments;
    }
}

?>
