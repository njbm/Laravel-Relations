<?php

use App\Http\Controllers\Backend\product\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;


Route::get('/', function () {
    return view('Frontend.index');
});



Route::get('/dashboard', function () {
    return view('Backend.master');
})->middleware(['auth', 'verified'])->name('index');


// Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Mail Notification to Multiple User

Route::get('/send-notification', function(){

    // $user = User::find(2);
    // $user->notify(new EmailNotification());

    $users = User::all();
    foreach ($users as $user)
    {
        Notification::send($user, new EmailNotification('Jaber', 'Navieasoft'));
    }
    return redirect()->back();
});






//CRUD

Route::get('/product',[ProductController::class,'index'])     //show
        ->name('Backend.product.index');

Route::get('/product/create',[ProductController::class,'create'])   //create
        ->name('Backend.product.create');

Route::post('/product/store',[ProductController::class,'store'])    //store
        ->name('Backend.product.store');

Route::get('/product/{id}/edit',[ProductController::class,'edit'])    //edit
        ->name('Backend.product.edit');

Route::put('/product/{id}/update',[ProductController::class,'update'])    //edit
        ->name('Backend.product.update');

// Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);

Route::delete('/product/{id}/delete', [ProductController::class, 'destroy']);




//frontend




