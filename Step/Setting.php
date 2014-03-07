<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step;
/**
 * Description of Contract
 *
 * @package Step 
 */
class Setting extends Base{
    public function execute($arguments = null) {
        @$this->load();
        if(!$this->state){
            file_put_contents($this.".json", '{"Product_Counter":0}');
            }
        return $this;
    }
}

?>
