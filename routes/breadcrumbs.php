<?php

// Dashboard
Breadcrumbs::for('admin.dashboard', function ($trail, $id = null) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Dashboard > Permissions
Breadcrumbs::for('admin.permissions.index', function ($trail, $id = null) {
    $trail->parent('admin.dashboard');
    $trail->push('Permissions', route('admin.permissions.index'));
});

// Dashboard > Permissions > Add
Breadcrumbs::for('admin.permissions.create', function ($trail, $id = null) {
    $trail->parent('admin.permissions.index');
    $trail->push('Add', route('admin.permissions.create'));
});

// Dashboard > Permissions > edit
Breadcrumbs::for('admin.permissions.edit', function ($trail, $permission = null) {
    $trail->parent('admin.permissions.index');
    $trail->push('Edit', route('admin.permissions.edit', $permission));
});

// Dashboard > Permissions > show
Breadcrumbs::for('admin.permissions.show', function ($trail, $permission = null) {
    $trail->parent('admin.permissions.index');
    $trail->push('Show', route('admin.permissions.show', $permission));
});

// Dashboard > Roles
Breadcrumbs::for('admin.roles.index', function ($trail, $id = null) {
    $trail->parent('admin.dashboard');
    $trail->push('Roles', route('admin.roles.index'));
});

// Dashboard > Roles > Add
Breadcrumbs::for('admin.roles.create', function ($trail, $id = null) {
    $trail->parent('admin.roles.index');
    $trail->push('Add', route('admin.roles.create'));
});

// Dashboard > Roles > edit
Breadcrumbs::for('admin.roles.edit', function ($trail, $role = null) {
    $trail->parent('admin.roles.index');
    $trail->push('Edit', route('admin.roles.edit', $role));
});

// Dashboard > Roles > show
Breadcrumbs::for('admin.roles.show', function ($trail, $role = null) {
    $trail->parent('admin.roles.index');
    $trail->push('Show', route('admin.roles.show', $role));
});


// Dashboard > User
Breadcrumbs::for('admin.users.index', function ($trail, $id = null) {
    $trail->parent('admin.dashboard');
    $trail->push('Users', route('admin.users.index'));
});

// Dashboard > User > Add
Breadcrumbs::for('admin.users.create', function ($trail, $id = null) {
    $trail->parent('admin.users.index');
    $trail->push('Add', route('admin.users.create'));
});

// Dashboard > User > edit
Breadcrumbs::for('admin.users.edit', function ($trail, $user = null) {
    $trail->parent('admin.users.index');
    $trail->push('Edit', route('admin.users.edit', $user));
});

// Dashboard > User > show
Breadcrumbs::for('admin.users.show', function ($trail, $user = null) {
    $trail->parent('admin.users.index');
    $trail->push('Show', route('admin.users.show', $user));
});

// Dashboard > Passport Tokens
Breadcrumbs::for('admin.passport', function ($trail, $id = null) {
    $trail->parent('admin.dashboard');
    $trail->push('Passport Token', route('admin.passport'));
});

// Dashboard > User
Breadcrumbs::for('admin.projects.index', function ($trail, $id = null) {
    $trail->parent('admin.dashboard');
    $trail->push('Projects', route('admin.projects.index'));
});

// Dashboard > User > Add
Breadcrumbs::for('admin.projects.create', function ($trail, $id = null) {
    $trail->parent('admin.projects.index');
    $trail->push('Add', route('admin.projects.create'));
});

// Dashboard > User > edit
Breadcrumbs::for('admin.projects.edit', function ($trail, $user = null) {
    $trail->parent('admin.projects.index');
    $trail->push('Edit', route('admin.projects.edit', $user));
});

// Dashboard > User > show
Breadcrumbs::for('admin.projects.show', function ($trail, $user = null) {
    $trail->parent('admin.projects.index');
    $trail->push('Show', route('admin.projects.show', $user));
});
