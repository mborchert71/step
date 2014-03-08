<?php

namespace Step\Release;

class HtmlResponse extends \Step\Release {

    public function __construct($type) {
        parent::__construct($type);
        $this->finish = new \Step\_call("Setting", "save");
        $this->execute = new \Step\_call("Release", "page");
    }

    public function page() {
        print "<h2>" . ($this->Process->Product->state) . "</h2>";
    }

    public function widget() {
        print "<div>" . ($this->Process->Product->state) . "</div>";
    }

}
