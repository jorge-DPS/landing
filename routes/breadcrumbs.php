<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', url('/'));
});

Breadcrumbs::for('backend.user.index', function (BreadcrumbTrail $trail) {
    $trail->push('Usuarios', route('backend.user.index'));
});

Breadcrumbs::for('landing.index', function (BreadcrumbTrail $trail) {
    $trail->push('Landing Pages', route('landing.index'));
});