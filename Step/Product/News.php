<?php

namespace Step\Product;

class News extends \Step\Product {

    public function __construct($type) {
        parent::__construct($type);
        $this->Process->Setting->State->Product_News_Counter++;
        $this->State = "Hello World on " . (new \DateTime)->format("Ymd@his.u");
    }

}
