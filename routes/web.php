<?php

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::put('problem/{problem}', [ProblemController::class, 'update'])->name('problem.update'); // Update problem
    Route::post('problem', [ProblemController::class, 'store'])->name('problem.store'); // Store new problem
    Route::delete('problem/{problem}', [ProblemController::class, 'destroy'])->name('problem.destroy'); // Delete problem
    Route::get('users', [UserController::class, 'users'])->name('users');
});

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::post('vote/{id}', [UserController::class, 'vote'])->name('vote');
    Route::get('problem', [ProblemController::class, 'index'])->name('problem.index'); // List all problems
    Route::get('problem/create', [ProblemController::class, 'create'])->name('problem.create'); // Show create form
    Route::get('problem/{problem}', [ProblemController::class, 'show'])->name('problem.show'); // Show single problem
    Route::get('problem/{problem}/edit', [ProblemController::class, 'edit'])->name('problem.edit'); // Show edit form

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
