<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Step\Release;
/**
 * Description of HtmlResponse
 *
 * @package Step\Release 
 */
class HtmlResponse extends \Step\Release{
    
    public function __construct($type) {
        parent::__construct($type);
        $this->finish = new \Step\_call("Setting", "save");
        $this->execute = new \Step\_call("Release", "page");
    }
    public function page(){
        print "<h2>".($this->Handle->Product->state)."</h2>";    
    }
    public function widget(){
        print "<div>".($this->Handle->Product->state)."</div>";    
    }

}

?>
