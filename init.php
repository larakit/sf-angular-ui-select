<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-select')
    ->usePackage('larakit/sf-angular-sanitize')
    ->usePackage('larakit/sf-bootstrap')
    ->setSourceDir('public')
    ->ngModule('ui.select')
    ->jsPackage('select.js')
    ->jsPackage('select.css');
