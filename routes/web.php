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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admin/template/ui', function () {
    return view('admin.template.ui');
})->name('admin.template.ui');

Route::get('admin/template/tables', function () {
    return view('admin.template.tables');
})->name('admin.template.tables');

Route::get('admin/template/forms', function () {
    return view('admin.template.forms');
})->name('admin.template.forms');
