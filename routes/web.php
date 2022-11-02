<?php

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});





// Route::get('/post', function () {
//     return view('post');
// });

Route::resource(
    'posts',
    'App\Http\Controllers\PostController'
);

Route::resource(
    'projects',
    'App\Http\Controllers\ProjectController'
);

Route::resource(
    'educations',
    'App\Http\Controllers\EducationController'
);


// Route::post('/store','PostController') ->name('store');
Auth::routes([
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/send-email', function () {
    $data = [
        'name' => 'Rahul Rahmatullah',
        'body' => 'Testing Kirim Email'
    ];
    Mail::to('rahul.rahmatullah@mail.ugm.ac.id')->send(new SendEmail($data));
    dd("Email Berhasil dikirim.");
});

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
