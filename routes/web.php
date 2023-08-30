<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExamsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/exams', function () {
//     return view('exams');
// })->middleware(['auth', 'verified'])->name('exams');
// Route::get('/exam_history', function () {
//     return view('exam_history');
// })->middleware(['auth', 'verified'])->name('exam_history');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post("/create-exam", [ExamsController::class, "create_exam"]);

    Route::get("/start-exam", [ExamsController::class, "index"])->name('exams');
    Route::post('/add_result', [ExamsController::class, "add_result"])->name('exam.add_result');
    Route::get('/exam_history', [ExamsController::class, "get_exam_history"])->name('exam.history');
});

require __DIR__.'/auth.php';



