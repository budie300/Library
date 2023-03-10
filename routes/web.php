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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index']);
// Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
// Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);
// Route::get('/catalogs/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
// Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
// Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);


//Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index']);
//Route::get('/members', [App\Http\Controllers\MemberController::class, 'index']);
// Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index']);

Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);
Route::resource('/publishers', App\Http\Controllers\PublisherController::class);
Route::resource('/members', App\Http\Controllers\MemberController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);
Route::resource('/transactions', App\Http\Controllers\TransactionController::class);


Route::get('/api/authors',[App\Http\Controllers\AuthorController::class, 'api']);
Route::get('/api/members',[App\Http\Controllers\MemberController::class, 'api']);
Route::get('/api/books',[App\Http\Controllers\BookController::class, 'api']);
Route::get('/api/publishers',[App\Http\Controllers\PublisherController::class, 'api']);
Route::get('/api/catalogs',[App\Http\Controllers\CatalogController::class, 'api']);
Route::get('/api/transactions',[App\Http\Controllers\TransactionController::class, 'api']);

// Route::get('test_spatie', 'TransactionController@test_spatie');
Route::get('test_spatie', [App\Http\Controllers\TransactionController::class, 'test_spatie']);
