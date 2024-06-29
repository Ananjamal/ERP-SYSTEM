<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Main::class)->name('dashboard');
    Route::get('/roles', App\Http\Livewire\Admin\Roles\Roles::class)->name('roles');
    Route::get('/permissions', App\Http\Livewire\Admin\Permissions\Permissions::class)->name('permissions');
    Route::get('/permissions', App\Http\Livewire\Admin\Permissions\Permissions::class)->name('permissions');
    Route::get('/users', App\Http\Livewire\Admin\Users\Users::class)->name('users');
    Route::get('/accounts', App\Http\Livewire\Admin\Accounts\Accounts::class)->name('accounts');
    Route::get('/salaries', App\Http\Livewire\Admin\Salaries\Salaries::class)->name('salaries');
    Route::get('/invoices', App\Http\Livewire\Admin\Invoices\Invoices::class)->name('invoices');
    Route::get('/inventory', App\Http\Livewire\Admin\Inventory\Inventory::class)->name('inventory');
    Route::get('/users', App\Http\Livewire\Admin\Users\Users::class)->name('users');
    Route::get('/transactions', App\Http\Livewire\Admin\Transactions\Transactions::class)->name('transactions');
    Route::get('/JournalEntries', App\Http\Livewire\Admin\JournalEntries\JournalEntries::class)->name('JournalEntries');
    Route::get('/expenses', App\Http\Livewire\Admin\Expenses\Expenses::class)->name('expenses');



});

