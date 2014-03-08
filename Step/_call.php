<?php

namespace Step;

class _call {

    public $class;
    public $method;
    public $arguments;

    public function __construct($class, $method, _properties $arguments = null) {
        //if strict then ask if Registry knows class and method
        $this->class = $class;
        $this->method = $method;
        $this->arguments = $arguments;
    }

}