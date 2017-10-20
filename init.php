<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-select')
    ->usePackage('larakit/sf-angular-sanitize')
    ->usePackage('larakit/sf-bootstrap')
    ->setSourceDir('public')
    ->jsPackage('select.js')
    ->cssPackage('select.css');
\Larakit\LkNgModule::register('ui.select');