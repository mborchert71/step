<?php

namespace Step;

class _properties {

    public $Process;
    public $Arctype;
    public $State;
    public $Type;
    public $Prepare;
    public $Perform;
    public $Postpare;

    public function __construct($type = "Base", \stdClass $setting = null) {
        $thisType = str_replace("\\", "/", $type); //use:in autoload       
        $this->Arctype = array_shift(explode("/", $thisType));
        $this->Type = "Step/" . $thisType;
        //todo:iterate validate setting...
    }

}
