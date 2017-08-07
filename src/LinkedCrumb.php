<?php

namespace GitMisi\BreadCrumbs;

class LinkedCrumb implements Crumb, Link {
    private $origin;
    private $target;

    public function __construct(Crumb $origin, $target) {
        $this->origin = $origin;
        $this->target = $target;
    }

    public function caption() {
       return $this->origin->caption();
    }

    public function url() {
        return $this->target;
    }

    public function html() {
        return sprintf('<a href="%s">%s</a>', $this->url(), $this->caption());
    }

	public function json()
	{
		return json_encode([
			'url' => $this->url(),
			'caption' => $this->caption()
		]);
	}
}
