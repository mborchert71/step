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
class News extends \Step\Product{
    public function __construct($type) {
        parent::__construct($type);
        $this->Handle->Setting->state->Product_Counter++;
        $this->Handle->Setting->state->Product_News_Counter++;
        $this->state= "Hello World on ".(new \DateTime)->format("Ymd@his.u");
    }
}

?>
