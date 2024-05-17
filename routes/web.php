<?php

use App\Http\Controllers\ArmanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGroundController;
use App\Http\Controllers\ArmanCastlesController;
use App\Http\Controllers\ArmanCavesController;
use App\Http\Controllers\ArmanChurchesController;
use App\Http\Controllers\ArmanForestsController;
use App\Http\Controllers\ArmanGardensController;
use App\Http\Controllers\ArmanLakesController;
use App\Http\Controllers\ArmanMallsController;




Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/n', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/////////////////////////////////////---CampGround

/*
Route::get('/campground', function () {
    return view('backend.campGround');
})->middleware(['auth', 'verified'])->name('campground');

Route::middleware(['auth'])->group(function () {

    Route::get('/campground', [CampgroundController::class, 'index'])->name('campground');

});

*/
#-------------camping grounds

Route::middleware(['auth'])->group(function () {

    //Route::get('/campground1', [CampgroundController::class, 'index'])->name('campground1');

    Route::resource('/adminpanel/campground', CampGroundController::class);

   // Route::resource('/campground', CampGroundController::class);

});


#-------------Arman routes

Route::middleware(['auth'])->group(function () {


    Route::resource('/adminpanel/arman', ArmanController::class);
    Route::resource('/adminpanel/castles', ArmanCastlesController::class);
    Route::resource('/adminpanel/caves', ArmanCavesController::class);
    Route::resource('/adminpanel/churches', ArmanChurchesController::class);
    Route::resource('/adminpanel/forests', ArmanForestsController::class);
    Route::resource('/adminpanel/gardens', ArmanGardensController::class);

    Route::resource('/adminpanel/lakes', ArmanLakesController::class);
    Route::resource('/adminpanel/malls', ArmanMallsController::class);

});
