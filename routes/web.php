<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Livewire\Admin\CastIndex;
use App\Http\Livewire\Admin\MovieIndex;
use App\Http\Livewire\Admin\SerieIndex;
use App\Http\Livewire\Admin\GenreIndex;
use App\Http\Livewire\Admin\SeasonIndex;
use App\Http\Livewire\Admin\TagIndex;

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


Route::middleware(['auth:sanctum','verified', 'role:admin' ])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/index', [Admincontroller::class, 'index'])->name('index');
    Route::get('/', [Admincontroller::class, 'index']);
    Route::get('movies',MovieIndex::class)->name('movies.index');

    Route::get('series',SerieIndex::class)->name('series.index');
    Route::get('series/{serie}/seasson',SerieIndex::class)->name('season.index');
    Route::get('series/{serie}/seasson/{season}/episodes',SerieIndex::class)->name('episodes.index');

    Route::get('genres',GenreIndex::class)->name('genres.index');
    Route::get('casts',CastIndex::class)->name('casts.index');
    Route::get('tags',TagIndex::class)->name('tags.index');
    Route::get('seasons',SeasonIndex::class)->name('seasons.index');

});












//Template

Route::get('admin/template/ui', function () {
    return view('admin.template.ui');
})->name('admin.template.ui');

Route::get('admin/template/tables', function () {
    return view('admin.template.tables');
})->name('admin.template.tables');

Route::get('admin/template/forms', function () {
    return view('admin.template.forms');
})->name('admin.template.forms');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
