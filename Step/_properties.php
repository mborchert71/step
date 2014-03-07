<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step;
/**
 * Description of _proterties
 *
 * @package
 */
class _properties {
    public $Handle;
    public $type;
    public $basename;
    public $state;
    public $prepare;
    public $execute;
    public $finish;   
    public function __construct(
            $type="Base",
            \stdClass $setting=null
            ){
        $this->type = str_replace("\\","/",$type);//@notice:autoload       
        $this->basename = array_shift(@explode("/",$this->type));
        $this->type= "Step/".$this->type;
        //iterate validate setting...
    }
}

?>
