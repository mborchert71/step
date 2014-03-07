<?php
/**
 *
 */
namespace Step;
/**
 * Description of Base
 *
 * @package Step 
 */
class Base extends _properties implements _methods{
    public function __construct($type="Base",$setting=null) {
        global $_HANDLE;
        parent::__construct($type);
        $this->Handle = &$_HANDLE;
        $_HANDLE->{$this->basename} = &$this;
        }
    final public function __call($type,$arguments){
        if($this->Handle->ClassExists($type));
        $class = "Step\\".$arguments[0];
        return new $class($arguments[0],$arguments);
        }
    final public function __toString() {
        return $this->type;
        }
    final private function call(_call $f) {
        if(isset($f->class)){         
            if($this->Handle->ClassExists($f->class)){
                $class = $this->Handle->{$f->class};
                if(method_exists($class, $f->method)){ 
                    $class->{$f->method}(@$f->arguments);
                }
            }
        }
        return $this;
    }
    public function prepare($arguments=null){
        if(isset($this->prepare))
        return $this->call($this->prepare,$arguments);
        return $this;
    }
    public function execute($arguments=null){
        if(isset($this->execute))
        return $this->call($this->execute,$arguments);
        return $this;print_r($this);
    }
    public function finish($arguments = null){
        if(isset($this->finish))
        return $this->call($this->finish,$arguments);
        return $this;
    }
    final public function render($arguments=null){
        if($this->prepare) $this->prepare($arguments);
        $this->execute($arguments);
        if($this->finish)  $this->finish($arguments);
        return $this;
    }
    public function save(){
        file_put_contents(
                Handle::$Root."/".$this.".json", json_encode($this->state));
    }
    public function load(){
        $this->state=json_decode(
                file_get_contents(Handle::$Root."/".$this.".json"));       
    }
}

?>
