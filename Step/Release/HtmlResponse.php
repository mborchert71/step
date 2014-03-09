<?php

namespace Step\Release;

class HtmlResponse extends \Step\Release {

    public function __construct($type) {
        parent::__construct($type);
        $this->Perform = new \Step\_me("Release", "page");
        $this->Postpare = new \Step\_me("Setting", "save");
    }

    public function page() {
        print "<h2>" . ($this->Process->Product->State) . "</h2>";
    }

    public function widget() {
        print "<div>" . ($this->Process->Product->State) . "</div>";
    }

}
