<?php

namespace Step;

class _me{

    public $Class;
    public $Method;
    public $Argume;

    public function __construct($class, $method, _properties $arguments = null) {
        $this->Class = $class;
        $this->Method = $method;
        $this->Argume = $arguments;
    }

}