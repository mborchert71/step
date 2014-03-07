<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step;
/**
 * Description of Handle
 *
 * @package
 */
class Handle{
    static $Root;
    public $Base      ;
    public $Event     ;
    public $Release   ;
    public $Company   ;
    public $Product   ;
    public $Worker    ;
    public $Setting   ;
    public $Order     ;
    protected $Class= array(
        "Base"  => "Base",
        "Handle"=> "Handle",
        "Event" => "Event",
        "Release"=> "Release",
        "Product"=> "Product",
        "Worker"=> "Worker",
        "Company"=>"Company",
        "Setting"=>"Setting",
        "Order"=>"Order"
    );
    public function ClassExists($class){
        return in_array($class, $this->Class);
    }
    public function __call($type,$arguments){
        if($this->ClassExists($type));
        $class = "Step\\".$arguments[0];
        return new $class($arguments[0],$arguments);
        }
}

?>
