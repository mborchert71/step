<?php

namespace Step\Product;

class Blog extends \Step\Product {

    public function execute() {

        parent::execute();
        $this->Process->Setting->state->Product_Blog_Counter++;
        $this->state = "new Blog Entry on " . date("Y-m-d h:i:s");
        return $this;
    }

}

