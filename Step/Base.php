<?php

namespace Step;

class Base extends _properties implements _methods {

    public function __construct($type = "Base", $setting = null) {
        global $_Process;
        parent::__construct($type);
        $this->Process = &$_Process;
        $_Process->{$this->Arctype} = &$this;
    }

    final public function __call($type, $a) {
        $class = "Step\\" . $a[0];
        return new $class($a[0], $a);
    }

    final public function __toString() {
        return $this->Type;
    }

    final private function call(_me $my) {
        if (!isset($my->Class)) {
            return $this;
        }
        $class = $this->Process->{$my->Class};
        if (method_exists($class, $my->Method)) {
            $class->{$my->Method}( $my->Argume);
        }   
        return $this;
    }

    public function prepare($a = null) {
        return isset($this->Prepare) ? $this->call($this->Prepare, $a) : $this;
    }

    public function perform($a = null) {
        return isset($this->Perform) ? $this->call($this->Perform, $a) : $this;
    }

    public function postpare($a = null) {
        return isset($this->Postpare) ? $this->call($this->Postpare, $a) : $this;
    }

    final public function render($a = null) {
        if ($this->Prepare) {
            $this->prepare($a);
        }
        $this->perform($a);
        if ($this->Postpare) {
            $this->postpare($a);
        }
        return $this;
    }

    public function save() {
        file_put_contents(
            Process::$Root . "/" . $this . ".json", json_encode($this->State));
    }

    public function load() {
        $this->State = json_decode(
            file_get_contents(Process::$Root . "/" . $this . ".json"));
    }

}
