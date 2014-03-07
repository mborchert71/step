<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step\Product;
/**
 * Description of News
 *
 * @package Step\Product
 */
class Blog extends \Step\Product{
    
    public function execute(){

        $this->Handle->Setting->state->Product_Counter++;
        $this->Handle->Setting->state->Product_Blog_Counter++;        
        $this->state = "new Blog Entry on ".date("Y-m-d h:i:s");
        return $this;
    }
}

?>
