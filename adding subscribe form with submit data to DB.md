# Page View before submit

![image](https://user-images.githubusercontent.com/89227642/221428448-977162f5-689d-4128-8cc0-d3fa59de037d.png)

# Page View after submit

![image](https://user-images.githubusercontent.com/89227642/221428537-a21aa503-ce4e-4aaa-9f34-6b03f51c410b.png)



To create a subscribe form in Laravel that submits data to a database, you can follow these steps:

1. Create a new Laravel project or open an existing project.
  
2. Create a new database table to store the subscriber's data. You can use the Laravel migration command to create a new migration file, like this:
  
  `php artisan make:migration create_subscribers_table`
  
  This will create a new migration file in the `database/migrations` directory.
 COMPLETED 

3. Edit the migration file to define the schema of the subscribers table. For example:
  
 ```
 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
 ```
  
  This will create a `subscribers` table with columns for the subscriber's name, email address, and timestamps for creation and updates.<br>
  COMPLETED <br>

4. Run the migration to create the `subscribers` table in the database:
  
  `php artisan migrate`<br>
  COMPLETED

5. Create a new route in `routes/web.php` to handle the subscribe form submission:
  ```php
  Route::post('/subscribe', 'SubscriberController@store')->name('subscribe');
  ```
6. Create a new controller named `SubscriberController` with a `store` method to handle the form submission:

  `php artisan make:controller SubscriberController`
  <br><br>
  Then, edit the `store` method to insert the subscriber's data into the `subscribers` table:
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    //
    public function store(Request $request)
    {
        $subscriber = new Subscriber;
        $subscriber->name = $request->input('name');
        $subscriber->email = $request->input('email');
        $subscriber->save();

        return redirect()->back()->with('success', 'Thanks for subscribing!');
    }
}
```
  
  ** This step didnt take place.. added this later... **<br>
  This will create a new `Subscriber` model instance, set its `name` and `email` attributes from the form input, and save it to the database. It will then redirect the user back to the form page with a success message.
  
7. Create a new view file named `subscribe.blade.php` to display the subscribe form:
  
uggeted the following:
```php
<form action="{{ route('subscribe') }}" method="post"> @csrf <input type="text" name="name" placeholder="Your name"> <input type="email" name="email" placeholder="Your email address"> <button type="submit">Subscribe</button> </form> @if(session('success')) <p>{{ session('success') }}</p> @endif`
``` 

I did this:
```php
<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Your name">
                        <input type="email" name="email" placeholder="Your email address">
                        <button type="submit">Subscribe</button>
                    </form>

                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

```
  This will create a simple HTML form with fields for the subscriber's name and email address, as well as a submit button. It will also display a success message if the subscriber was added to the database.
  
8. Create a new route in `routes/web.php` to display the subscribe form:
```  
  Route::get('/subscribe', function () { return view('subscribe'); })->name('subscribe.form');
```  
  This will create a new route to display the `subscribe.blade.php` view file.

# Error was the syntax in `web.php`

 
```php
// OLD ->
// Route::post('/subscribe', 'SubscriberController@store')->name('subscribe');
// NEW ->
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
```

