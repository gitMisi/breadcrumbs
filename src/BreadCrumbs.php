<?php

namespace GitMisi\BreadCrumbs;

class BreadCrumbs implements ToHtml
{
    /** @var Crumb[] */
    private $node;
    private $separator;

    public function __construct()
    {
        $this->node = [];
        $this->separator = '';
    }

    public function add(Crumb $node) {
        $this->node[] = $node;
        return $this;
    }

    public function separator($separator) {
        $this->separator = $separator;
        return $this;
    }

    public function html() {
        $html = '';
        foreach ($this->node as $node) {
            $html .= $node->html() . $this->separator;
        }
        return rtrim($html, $this->separator);
    }
}
