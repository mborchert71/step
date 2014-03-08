<?php

namespace Step;

class Base extends _properties implements _methods {

    public function __construct($type = "Base", $setting = null) {
        global $_Process;
        parent::__construct($type);
        $this->Process = &$_Process;
        $_Process->{$this->basename} = &$this;
    }

    final public function __call($type, $arguments) {
        //if($this->Process->ClassExists($type));
        $class = "Step\\" . $arguments[0];
        return new $class($arguments[0], $arguments);
    }

    final public function __toString() {
        return $this->type;
    }

    final private function call(_call $f) {
        if (!isset($f->class)) {
            return $this;
        }
        // if($this->Process->ClassExists($f->class)){
        $class = $this->Process->{$f->class};
        if (method_exists($class, $f->method)) {
            $class->{$f->method}(@$f->arguments);
        }
        //}     
        return $this;
    }

    public function prepare($a = null) {
        return isset($this->prepare) ? $this->call($this->prepare, $a) : $this;
    }

    public function execute($a = null) {
        return isset($this->execute) ? $this->call($this->execute, $a) : $this;
    }

    public function finish($a = null) {
        return isset($this->finish) ? $this->call($this->finish, $a) : $this;
    }

    final public function render($arguments = null) {
        if ($this->prepare) {
            $this->prepare($arguments);
        }
        $this->execute($arguments);
        if ($this->finish) {
            $this->finish($arguments);
        }
        return $this;
    }

    public function save() {
        file_put_contents(
            Process::$Root . "/" . $this . ".json", json_encode($this->state));
    }

    public function load() {
        $this->state = json_decode(
            file_get_contents(Process::$Root . "/" . $this . ".json"));
    }

}
