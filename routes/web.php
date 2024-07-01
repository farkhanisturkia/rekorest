<?php

use App\Models\Training;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\RekomController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\TrainingController;

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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {

            $training = Training::where('is_dataset', false)->get();
            
            return view('dashboard', [
                'training' => $training,
            ]);
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        
        Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
        Route::get('/profil/create', [ProfilController::class, 'create'])->name('profil.create');
        Route::post('/profil/create', [ProfilController::class, 'store'])->name('profil.store');
        Route::get('/profil/edit/{user}', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('/profil/edit/{user}', [ProfilController::class, 'update'])->name('profil.update');
        Route::delete('/profil/{user}', [ProfilController::class, 'destroy'])->name('profil.destroy');


        Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
        Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
        Route::post('/training/create', [TrainingController::class, 'store'])->name('training.store');
        Route::get('/training/edit/{training}', [trainingController::class, 'edit'])->name('training.edit');
        Route::put('/training/edit/{training}', [trainingController::class, 'update'])->name('training.update');
        Route::delete('/training/{training}', [TrainingController::class, 'destroy'])->name('training.destroy');

        Route::get('/testing', [TestingController::class, 'index'])->name('testing.index');
        Route::get('/testing/create', [TestingController::class, 'create'])->name('testing.create');
        Route::post('/testing/create', [TestingController::class, 'store'])->name('testing.store');
        Route::put('/testing/{testing}', [TestingController::class, 'destroy'])->name('testing.destroy');

        Route::get('/hasil', [HasilController::class, 'index'])->name('hasil.index');
        Route::get('/hasil/detail/{id}', [HasilController::class, 'detail'])->name('hasil.detail');
        Route::get('/rekom', [RekomController::class, 'index'])->name('rekom.index');
        Route::get('/rekom/detail/{id}', [RekomController::class, 'detail'])->name('rekom.detail');
    });

    require __DIR__.'/auth.php';
});
