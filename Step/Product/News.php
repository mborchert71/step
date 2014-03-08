<?php

namespace Step\Product;

class News extends \Step\Product {

    public function __construct($type) {
        parent::__construct($type);
        parent::execute();
        $this->Process->Setting->state->Product_News_Counter++;
        $this->state = "Hello World on " . (new \DateTime)->format("Ymd@his.u");
    }

}
