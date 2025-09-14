<?php

use App\Http\Controllers\adminRelatedController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HealthRecordController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\VetController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/test-mail', function () {
    Mail::raw('Hello! This is a test email from Furshield app.', function ($message) {
        $message->to('dayyanasif93@gmail.com')
                ->subject('SMTP Test Successful');
    });
    return 'Test mail sent!';
});
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

// routes/web.php
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/services', function () {
    return view('services');
});
Route::get('/checkUser', [adminRelatedController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/approve/{id}', [App\Http\Controllers\AdminController::class, 'approve']);
    Route::get('/admin/remove/{id}', [App\Http\Controllers\AdminController::class, 'remove']);
});


Route::get('/shop', function () {
    return view('shop');
});



Route::get('/blog', function () {
    return view('blog');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/countUser', [adminRelatedController::class, 'countUser']);
Route::get('/admin/users', [adminRelatedController::class, 'index'])->name('users.index');
Route::post('/admin/users/{id}/update-role', [adminRelatedController::class, 'updateRole'])->name('users.updateRole');
Route::post('/admin/users/{id}/remove-role', [adminRelatedController::class, 'removeRole'])->name('users.removeRole');
Route::delete('/admin/users/{id}', [adminRelatedController::class, 'destroy'])->name('users.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('pets', PetController::class);

    Route::resource('pets.health', HealthRecordController::class)
     ->parameters(['pets.health' => 'healthRecord']);


    //  Route::resource('pets.health', HealthRecordController::class);

    Route::resource('appointments', AppointmentController::class);

    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('cart/remove/{item}', [CartController::class, 'remove'])->name('cart.remove');

    Route::post('vet/profile', [VetController::class, 'updateProfile'])->name('vet.profile.update');
    Route::post('vet/appointment/{appointment}', [VetController::class, 'updateAppointment'])->name('vet.appointment.update');

    Route::get('appointment/{appointment}/treatment/create', [TreatmentController::class, 'create'])->name('treatments.create');
    Route::post('appointment/{appointment}/treatment', [TreatmentController::class, 'store'])->name('treatments.store');

    Route::get('shelter/dashboard', [ShelterController::class, 'dashboard'])->name('shelter.dashboard');
    Route::get('shelter/listing/create', [ShelterController::class, 'create'])->name('shelter.create');
    Route::post('shelter/listing', [ShelterController::class, 'store'])->name('shelter.store');
    Route::post('shelter/listing/{listing}', [ShelterController::class, 'update'])->name('shelter.update');

    Route::get('shelter/check/', [ShelterController::class, 'checkPets']);
     Route::post('rate',[RatingController::class,'store'])->name('rate.store');

});
// public function checkPets(){
//     return view('adoption.public');
// }
Route::middleware(['auth','role:vet'])->group(function(){
    Route::get('vet/dashboard',[VetController::class,'dashboard'])->name('vet.dashboard');
});
// Route::middleware(['auth','role:admin'])->group(function(){
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

// Route::middleware(['auth','role:shelter'])->group(function(){
//     Route::get('shelter/dashboard', [ShelterController::class, 'dashboard'])->name('shelter.dashboard');
// });

// Route::middleware(['auth','role:petowner'])->group(function(){
//     Route::get('dashboard', function(){ return view('dashboard'); })->name('dashboard');
// });


Route::get('adoptions',function(){
    return view('shelter.public',['pets'=>\App\Models\AdoptionListing::where('status','available')->get()]);
})->name('adoptions.public');

Route::get('about',[PageController::class,'about'])->name('about');
Route::get('contact',[PageController::class,'contact'])->name('contact');


require __DIR__ . '/auth.php';




