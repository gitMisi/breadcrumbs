<?php

require_once __DIR__ . '/vendor/autoload.php';

use GitMisi\BreadCrumbs\BreadCrumbs;
use GitMisi\BreadCrumbs\LinkedCrumb;
use GitMisi\BreadCrumbs\SimpleCrumb;

$breadCrumbs = new BreadCrumbs();
echo $breadCrumbs
    ->add(
        new LinkedCrumb(
            new SimpleCrumb('main page'),
            '/'
        )
    )
    ->add(
        new LinkedCrumb(
            new SimpleCrumb('level 1'),
            '/categories/'
        )
    )
    ->add(
        new SimpleCrumb('leaf level')
    )
    ->separator(' > ')
    ->html();
