<?php

namespace GitMisi\BreadCrumbs;

class SimpleCrumb implements Crumb {
    private $caption;

    public function __construct($caption) {
        $this->caption = $caption;
    }

    public function caption() {
        return $this->caption;
    }

    public function html() {
        return $this->caption();
    }
}
