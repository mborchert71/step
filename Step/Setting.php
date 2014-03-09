<?php

namespace Step;

class Setting extends Base {

    public function perform($arguments = null) {
        $this->load();
        if (!$this->State) {
            file_put_contents($this . ".json", '{"Product_Counter":0}');
        }
        return $this;
    }

}
