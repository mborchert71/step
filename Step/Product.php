<?php

namespace Step;

class Product extends Base {

        public function execute() {

        $this->Process->Setting->state->Product_Counter++;
        return $this;
    }
}
