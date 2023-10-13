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

Route::get('/grow_journals', [GrowJournalController::class, 'index'])->name('grow_journals.index');
Route::get('/grow_journals/create', [GrowJournalController::class, 'create'])->name('grow_journals.create');
Route::post('/grow_journals', [GrowJournalController::class, 'store'])->name('grow_journals.store');
Route::get('/grow_journals/{id}', [GrowJournalController::class, 'show'])->name('grow_journals.show');
Route::get('/grow_journals/{id}/edit', [GrowJournalController::class, 'edit'])->name('grow_journals.edit');
Route::put('/grow_journals/{id}', [GrowJournalController::class, 'update'])->name('grow_journals.update');
Route::delete('/grow_journals/{id}', [GrowJournalController::class, 'destroy'])->name('grow_journals.destroy');

// Grow Journal Entries
Route::get('/grow_journals/{id}/entries', [JournalEntryController::class, 'index'])->name('journal_entries.index');
Route::get('/grow_journals/{id}/entries/create', [JournalEntryController::class, 'create'])->name('journal_entries.create');
Route::post('/grow_journals/{id}/entries', [JournalEntryController::class, 'store'])->name('journal_entries.store');
Route::get('/grow_journals/{id}/entries/{entry_id}', [JournalEntryController::class, 'show'])->name('journal_entries.show');
Route::get('/grow_journals/{id}/entries/{entry_id}/edit', [JournalEntryController::class, 'edit'])->name('journal_entries.edit');
Route::put('/grow_journals/{id}/entries/{entry_id}', [JournalEntryController::class, 'update'])->name('journal_entries.update');
Route::delete('/grow_journals/{id}/entries/{entry_id}', [JournalEntryController::class, 'destroy'])->name('journal_entries.destroy');