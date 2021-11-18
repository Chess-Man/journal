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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/subject', function () {
    return view('links.subject');
})->name('subject');

Route::get('/task', function () {
    return view('links.task');
})->name('task');

Route::get('/file', function () {
    return view('links.file');
})->name('file');

Route::get('/grades', function () {
    return view('links.grades');
})->name('grades');

Route::get('/account', function () {
    return view('links.account');
})->name('account');

Route::get('/notifications', function () {
    return view('links.notifications');
})->name('notifications');

Route::get('/profile', function () {
    return view('links.profile');
})->name('profile');

Route::get('/student', function () {
    return view('links.student');
})->name('student');


/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
