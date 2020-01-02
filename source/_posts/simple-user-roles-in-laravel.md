---
extends: _layouts.post
section: content
title: "Simple user roles in Laravel"
date: 2019-12-27
update: 2019-12-27
description: "Simple user roles in Laravel"
priority: 55
featured: true
categories: [tech]
slug: simple-user-roles-in-laravel
---

If you do only have roles for your users – such as admin, contributor and user – and you want to restrict access to routes only, advanced (and excellent) packages may be too heavy for you.
Let me show you how to solve this authorization problem very easily.

Your user model needs an extra field to store the role of every user. Let's add a string field which will hold values such as `user`, `manager` or `admin`. Every user needs a role, so this field is not nullable and has a default of `user`. Of course you have more fields in your user model, I'll add an email field to the user for demonstration purposes.

```php
// Create migration
// create_users_table.php

Schema::create('users', function (Blueprint $table) {
  ...
  $table->string('email')->unique();
  $table->string('role')->default('user');
  ...
}
```

Let's create a test user, using Laravel's tinker app, test it's default role and upgrade it to `admin`.
`php artisan tinker`

```php
// Create test user
$user = App\User::create(['email' => 'test01@test.test']);
$user->role; // 'user'

// Upgrade user to admin
$user->role = 'admin';
$user->save();
```

Until now, the user role is just a string and does not do anything. Let's change this by generating a custom middleware. Middlewares can be attached to routes and control who has access to those routes.

For example, to restrict the access to `/logged-in-users-only` to logged in users, you would create the following function in your routes file:

```php
// routes/web.php
Route::get('logged-in-users-only', function () {
  return 'Only logged in users can see this';
})->middleware('auth');
```

We can restrict routes to user roles with a custom middleware:

`php artisan make:middleware UserRoles`

This will create a middleware file that we can customize:

```php
// Http/Middleware/UserRoles
public function handle($request, Closure $next, ...$roles)
{
  return collect($roles)->contains(auth()->user()->role) ? $next($request) : back();
}
```

This `handle()` method will only allow people access the route if their role is in the list of allowed roles in the protected route.

Here is the whole `return` one-liner in natural language:
> If the collection of rules contains the logged in user's role, then allow and process the request, otherwise redirect the user back.

- `...$roles` allows to pass multiple roles at once, the resulting `$roles` is an array with all parameters
- With `collect()` I create a collection out of the array, so I can use collection methods and chain them, such as `contains()`
- `contains()` will check whether the role is in the collection
- `return CONDITION ? THEN : ELSE` is called a ternary operator and a shorter version of `if (CONDITION) { then } else { }`

To make use of this middleware, we need to register it in the kernel:

```php
// Http/Kernel.php

use App\Http\Middleware\UserRoles;
...

protected $routeMiddleware = [
  ...
  'roles' => UserRoles::class,
];
```

To only allow users with role `admin` to a route, you create it like the following:

```php
// routes/web.php
Route::get('types', function () {
  return 'Access granted';
})->name('test.roles')->middleware('roles:admin');
```

And because we allow to pass more than one role (remember the `...$roles`) to the middleware, we can allow several roles to access the same route. Let's also give the `manager` access to this route:

```php
// routes/web.php
Route::get('types', function () {
  return 'Access granted';
})->name('test.roles')->middleware('roles:admin,manager'); // no space after comma!
```

One risk with this approach is that you pass roles around as strings. You always need to remember which roles you have and how you named them. A small typo such as `adnin` instead of `admin` will be hard to spot and renaming a role (e.g. `manager` to become `editor`) can easily break your system.

In the next iteration of this article, I will introduce `Enums` to help reducing this risk, but for now this solution is lean and will solve your basic needs.

P.S. If you have suggestions on refactoring or improving, please send me a mail:
