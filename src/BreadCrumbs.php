<?php

namespace GitMisi\BreadCrumbs;

class BreadCrumbs implements Printable
{
    /** @var Crumb[] */
    private $node;
    private $separator;

    public function __construct()
    {
        $this->node = [];
        $this->separator = '';
    }

	/**
	 * @return $this
	 */
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

	public function json()
	{
		$buffer = [];
		foreach ($this->node as $node) {
			$buffer[] = json_decode($node->json(), true);
		}
		return json_encode(array_merge(['separator' => $this->separator], $buffer));
	}
}
