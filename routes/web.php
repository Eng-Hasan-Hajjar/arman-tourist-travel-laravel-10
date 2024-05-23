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
use App\Http\Controllers\ArmanMountainsController;
use App\Http\Controllers\ArmanMuseumsController;
use App\Http\Controllers\ArmanPlacesController;
use App\Http\Controllers\ArmanSlopesController;
use App\Http\Controllers\ArmanSpringsController;
use App\Http\Controllers\ArmanTheatersController;

use App\Http\Controllers\VisitorController;

use App\Http\Controllers\ReservationController;







Route::get('/', function () {
    return view('frontend.index');

});
Route::get('/destination', function () {
    return view('frontend.destination');
});
Route::get('/caves', function () {
    return view('frontend.caves');
});

Route::get('/castles', function () {
    return view('frontend.castles');
});

Route::get('/lakes', function () {
    return view('frontend.lakes');
});

Route::get('/malls', function () {
    return view('frontend.malls');
});

Route::get('/mountains', function () {
    return view('frontend.mountains');
});

Route::get('/slopes', function () {
    return view('frontend.slopes');
});


Route::get('/museums', function () {
    return view('frontend.museums');
});

Route::get('/forests', function () {
    return view('frontend.forests');
});

Route::get('/gardens', function () {
    return view('frontend.gardens');
});

Route::get('/campgrounds', function () {
    return view('frontend.campgrounds');
});
Route::get('/springs', function () {
    return view('frontend.springs');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
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
    Route::resource('/adminpanel/mountains', ArmanMountainsController::class);
    Route::resource('/adminpanel/museums', ArmanMuseumsController::class);
    Route::resource('/adminpanel/places', ArmanPlacesController::class);
    Route::resource('/adminpanel/slopes', ArmanSlopesController::class);
    Route::resource('/adminpanel/springs', ArmanSpringsController::class);
    Route::resource('/adminpanel/theaters', ArmanTheatersController::class);

    Route::resource('/adminpanel/visitors', VisitorController::class);

    Route::resource('/adminpanel/reservations', ReservationController::class);




});
