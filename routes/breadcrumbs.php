<?php

use App\Models\Athlete;
use App\Models\BackendUser;
use App\Models\Post;
use App\Models\RegistrationForm;
use App\Models\Setting;
use App\Models\SportType;
use App\Models\Tag;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// Dashboard
Breadcrumbs::for('backend.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('backend.dashboard'));
});

// Tags
Breadcrumbs::for('tags.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Tags', route('tags.index'));
});

Breadcrumbs::for('tags.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('tags.index');
    $trail->push('Create');
});

Breadcrumbs::for('tags.edit', function (BreadcrumbTrail $trail, Tag $tag) {
    $trail->parent('backend.dashboard');
    $trail->parent('tags.index');
    $trail->push($tag->title);
});

// Posts
Breadcrumbs::for('posts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Posts', route('posts.index'));
});

Breadcrumbs::for('posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('posts.index');
    $trail->push('Create');
});

Breadcrumbs::for('posts.edit', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('backend.dashboard');
    $trail->parent('posts.index');
    $trail->push($post->slug);
});

// Administrators
Breadcrumbs::for('administrators.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Administrators', route('administrators.index'));
});

Breadcrumbs::for('administrators.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('administrators.index');
    $trail->push('Create');
});

Breadcrumbs::for('administrators.edit', function (BreadcrumbTrail $trail, int $administrator) {
    $admin = BackendUser::findOrFail($administrator);
    $trail->parent('backend.dashboard');
    $trail->parent('administrators.index');
    $trail->push($admin->first_name . ' ' . $admin->last_name);
});

// Roles
Breadcrumbs::for('roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Roles', route('roles.index'));
});

Breadcrumbs::for('roles.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('roles.index');
    $trail->push('Create');
});

Breadcrumbs::for('roles.edit', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('backend.dashboard');
    $trail->parent('roles.index');
    $trail->push($role->name);
});

// Permissions
Breadcrumbs::for('permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Permissions', route('permissions.index'));
});

Breadcrumbs::for('permissions.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('permissions.index');
    $trail->push('Create');
});

Breadcrumbs::for('permissions.edit', function (BreadcrumbTrail $trail, Permission $permission) {
    $trail->parent('backend.dashboard');
    $trail->parent('permissions.index');
    $trail->push($permission->name);
});

Breadcrumbs::for('profile.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push(auth()->user()->full_name ?? '');
});

// Athletes
Breadcrumbs::for('athletes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Athletes', route('athletes.index'));
});

Breadcrumbs::for('athletes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('athletes.index');
    $trail->push('Create');
});

Breadcrumbs::for('athletes.edit', function (BreadcrumbTrail $trail, Athlete $athlete) {
    $trail->parent('backend.dashboard');
    $trail->parent('athletes.index');
    $trail->push($athlete->first_name . ' ' . $athlete->last_name);
});


// SportTypes
Breadcrumbs::for('sport_types.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Sport Types', route('sport_types.index'));
});

Breadcrumbs::for('sport_types.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('sport_types.index');
    $trail->push('Create');
});

Breadcrumbs::for('sport_types.edit', function (BreadcrumbTrail $trail,  SportType $sport_type) {
    $trail->parent('backend.dashboard');
    $trail->parent('sport_types.index');
    $trail->push($sport_type->title);
});

// Registration forms
Breadcrumbs::for('registration_forms.index', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->push('Registration Forms', route('registration_forms.index'));
});

Breadcrumbs::for('registration_forms.create', function (BreadcrumbTrail $trail) {
    $trail->parent('backend.dashboard');
    $trail->parent('registration_forms.index');
    $trail->push('Create');
});

Breadcrumbs::for('registration_forms.edit', function (BreadcrumbTrail $trail, int $registration_form) {
    $registration_form = RegistrationForm::findOrFail($registration_form);
    $trail->parent('backend.dashboard');
    $trail->parent('registration_forms.index');
    $trail->push($registration_form->email);
});
