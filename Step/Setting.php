<?php

namespace Step;

class Setting extends Base {

    public function execute($arguments = null) {
        $this->load();
        if (!$this->state) {
            file_put_contents($this . ".json", '{"Product_Counter":0}');
        }
        return $this;
    }

}
