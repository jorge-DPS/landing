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

// Employee Index (Lista de empleados)
// Breadcrumbs::for('employees.index', function (BreadcrumbTrail $trail, $page, $section) {
//     $trail->parent('home');
//     $trail->push('Configuración de Páginas', route('employees.index', ['page' => $page->id, 'section' => $section->id]));
// });



// Employee Index (Lista de empleados)
Breadcrumbs::for('employees.index', function (BreadcrumbTrail $trail, $page, $section) {
    $trail->push('Empleados', route('employees.index', ['page' => $page, 'section' => $section]));
});

// Employee Create (Agregar empleado)
Breadcrumbs::for('employees.create', function (BreadcrumbTrail $trail, $page, $section) {
    $trail->push('Agregar Empleado', route('employees.create', ['page' => $page->id, 'section' => $section->id]));
});

// Employee Edit (Editar empleado)
Breadcrumbs::for('employees.edit', function (BreadcrumbTrail $trail, $page, $section, $employee) {
    $trail->push('Editar Empleado', route('employees.edit', ['page' => $page->id, 'section' => $section->id, 'employee' => $employee->id]));
});

// Employee Show (Ver empleado)
Breadcrumbs::for('employees.show', function (BreadcrumbTrail $trail, $page, $section, $employee) {
    $trail->push('Ver Empleado', route('employees.show', ['page' => $page->id, 'section' => $section->id, 'employee' => $employee->id]));
});

// Imagenes Index (Lista de imagenes)
<<<<<<< HEAD
Breadcrumbs::for('images.index', function (BreadcrumbTrail $trail, $page, $section) {
    $trail->push('imagenes', route('images.index', ['page' => $page, 'section' => $section]));
=======
Breadcrumbs::for('section-gallery.index', function (BreadcrumbTrail $trail, $page, $section) {
    $trail->push('imagenes', route('section-gallery.index', ['page' => $page, 'section' => $section]));
>>>>>>> 86c4e46 (images)
});