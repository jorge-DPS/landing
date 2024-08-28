<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', url('/'));
});

Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->push('Usuarios', route('users.index'));
});

Breadcrumbs::for('carrusel.index', function (BreadcrumbTrail $trail) {
    $trail->push('Carrusel', route('carrusel.index'));
});

Breadcrumbs::for('carrusel.create', function (BreadcrumbTrail $trail) {
    $trail->push('Crear carrusel', route('carrusel.create'));
});

Breadcrumbs::for('carrusel.edit', function (BreadcrumbTrail $trail, $carrusel) {
    $trail->push('Editar carrusel', route('carrusel.edit', $carrusel->id));
});

Breadcrumbs::for('metatags.index', function (BreadcrumbTrail $trail) {
    $trail->push('Metatags', route('metatags.index'));
});