<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\libraryController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/addBook',[BookController::class,'addBook']);
Route::post('/addBook',[BookController::class,'saveBook'])->name('save_B');
Route::get('/edit-book/{id}',[BookController::class,'editBook']);
Route::post('/updateBook',[BookController::class,'updateBook'])->name('up');
Route::get('/delete-book/{id}',[BookController::class,'deleteBook']);

Route::get('/addAuthor',[AuthorController::class,'addAuthor']);
Route::post('/addAuthor',[AuthorController::class,'saveAuthor'])->name('save_A');
Route::get('/author',[AuthorController::class,'author']);
Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor']);
Route::post('/updateAuthor',[AuthorController::class,'updateAuthor'])->name('up_A');
Route::get('/delete-author/{id}',[AuthorController::class,'deleteAuthor']);

Route::get('/addPublisher',[PublisherController::class,'addPublisher']);
Route::post('/addPublisher',[PublisherController::class,'savePublisher'])->name('save_P');
Route::get('/publisher',[PublisherController::class,'publisher']);
Route::get('/edit-publisher/{id}',[PublisherController::class,'editPublisher']);
Route::post('/updatePublisher',[PublisherController::class,'upPublisher'])->name('up_P');
Route::get('/delete-publisher/{id}',[PublisherController::class,'deletePublisher']);

Route::get('/select/{id}',[libraryController::class,'selectBook']);
Route::post('/select',[libraryController::class,'seveLic2'])->name('save_L');
Route::get('/library',[libraryController::class,'library']);
Route::get('/delete/{id}',[libraryController::class,'deleteLB']);
Route::get('/print/{id}',[libraryController::class,'generate']);

Route::get('/manga',[BookController::class,'Manga']);
Route::get('/novel',[BookController::class,'Novel']);