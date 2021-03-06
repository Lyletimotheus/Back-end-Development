<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
    
    // Load raw json (API)
    // return ['foo' => 'bar'];
});

// Implementing a wildcard to differentiate between various posts
Route::get('posts/{post}', function($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

// Before we fetch that post from that path, check to see if the path exists
    if(! file_exists($path)) {
        // Return the user to the home page 
        return redirect('/');

        // Throw a custom 404 error page
        // abort(404);
    }

    $post = file_get_contents($path);
    return view ('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+');

