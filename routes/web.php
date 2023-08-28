<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;



Route::get('/', function () {
    return view('welcome');
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

require __DIR__.'/auth.php';

