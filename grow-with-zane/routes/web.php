<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get(
    '/grow_journals',
    [App\Http\Controllers\GrowJournalController::class,
    'index'])
    ->name('grow_journals.index'
);
Route::get(
    '/grow_journals/create',
    [App\Http\Controllers\GrowJournalController::class,
    'create'])
        ->name('grow_journals.create'
);
Route::post(
    '/grow_journals',
    [App\Http\Controllers\GrowJournalController::class,
    'store'])
    ->name('grow_journals.store'
);
Route::get(
    '/grow_journals/{id}',
    [App\Http\Controllers\GrowJournalController::class,
    'show'])
    ->name('grow_journals.show');
Route::get(
    '/grow_journals/{id}/edit',
    [App\Http\Controllers\GrowJournalController::class,
    'edit'])
    ->name('grow_journals.edit'
);
Route::put(
    '/grow_journals/{id}',
    [App\Http\Controllers\GrowJournalController::class,
    'update'])
    ->name('grow_journals.update'
);
Route::delete(
    '/grow_journals/{id}',
    [App\Http\Controllers\GrowJournalController::class,
    'destroy'])
    ->name('grow_journals.destroy'
);

// Grow Journal Entries
Route::get('/grow_journals/{id}/entries', [App\Http\Controllers\JournalEntryController::class, 'index'])->name('journal_entries.index');
Route::get('/grow_journals/{id}/entries/create', [App\Http\Controllers\JournalEntryController::class, 'create'])->name('journal_entries.create');
Route::post('/grow_journals/{id}/entries', [App\Http\Controllers\JournalEntryController::class, 'store'])->name('journal_entries.store');
Route::get('/grow_journals/{id}/entries/{entry_id}', [App\Http\Controllers\JournalEntryController::class, 'show'])->name('journal_entries.show');
Route::get('/grow_journals/{id}/entries/{entry_id}/edit', [App\Http\Controllers\JournalEntryController::class, 'edit'])->name('journal_entries.edit');
Route::put('/grow_journals/{id}/entries/{entry_id}', [App\Http\Controllers\JournalEntryController::class, 'update'])->name('journal_entries.update');
Route::delete('/grow_journals/{id}/entries/{entry_id}', [App\Http\Controllers\JournalEntryController::class, 'destroy'])->name('journal_entries.destroy');

//Routes
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/{id}', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}/edit', [App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.destroy');
