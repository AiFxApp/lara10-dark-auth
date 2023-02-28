CRUD with Image 

### Read also:

Easy Laravel Localization Tutorial With Blog Use Case and Repo Example
https://fajarwz.com/blog/easy-laravel-localization-tutorial-with-blog-use-case-and-repo-example/
Laravel Export/Import: Step-by-Step Guide with Repo Example
https://fajarwz.com/blog/laravel-export-import-step-by-step-guide-with-repo-example/

# Testing this tutorial:

https://fajarwz.com/blog/laravel-10-crud-and-image-upload-tutorial-with-laravel-breeze-and-repo-example/


# Create Posts Migration

Now that we have installed Laravel 10 and Laravel Breeze, let’s create a migration for our `posts` table. 

This table will store our post data for this CRUD tutorial.

To create a migration, run the following command in your terminal:

`php artisan make:migration "create posts table"`

This command will create a new migration file in the `database/migrations` directory.

Open the migration file and add the following code to create the `posts` table:

```php
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->text('featured_image');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('posts');
}
```
This code will create a posts table with an `id`, `title`, `content`, `featured_image`, and `timestamps` columns.

# Migrate the Migration

Finally, let’s run the migration to create the posts table in our database. 

To do this, run the following command in your terminal:

`php artisan migrate`

This command will run all the outstanding migrations in the `database/migrations` directory.

# Create Routes

Now that we have our posts table and database set up, 

let’s create some routes to handle the CRUD operations for our blog posts.

Open the `routes/web.php` file and update it with the following code:

```php
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Add the following route to the existing routes because we want the posts route accessible to authenticated users only.
    // We'll use a resource route because it contains all the exact routes we need for a typical CRUD application.
    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';
```
This adds the posts resource route to the existing routes and applies the auth middleware 

to restrict access to authenticated users only. 

The `PostController` is set up as a resource controller to handle all the typical CRUD operations.

