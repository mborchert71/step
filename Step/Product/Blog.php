<?php

namespace Step\Product;

class Blog extends \Step\Product {

    public function perform() {
        $this->Process->Setting->State->Product_Blog_Counter++;
        $this->State = "new Blog Entry on " . date("Y-m-d h:i:s");
        return $this;
    }

}

