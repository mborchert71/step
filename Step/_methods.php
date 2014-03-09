<?php

namespace Step;

interface _methods {

    public function prepare();

    public function perform();

    public function postpare();

    public function render();

    public function load();

    public function save();

    public function __toString();

    public function __construct($type);

    public function __call($type, $arguments);
}
