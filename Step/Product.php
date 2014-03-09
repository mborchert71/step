<?php

namespace Step;

class Product extends Base {

        public function __construct($type = "Base", $setting = null) {
            parent::__construct($type, $setting);
            $this->Process->Setting->State->Product_Counter++;
        }
}
