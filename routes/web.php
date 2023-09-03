<?php


use App\Http\Controllers\Backend\product\ProductController;
use App\Http\Controllers\Backend\slider\SliderController;
use App\Http\Controllers\Backend\University\teacher\TeacherController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Comment;
use App\Models\Phones;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;


// Route::get('/', function () { return view('Frontend.index'); });

Route::get('/f-product', function () {
    $products= Product::all();
    return view('Frontend.product',compact('products')); });

Route::get('/app', function () { return view('Backend.layouts.app'); });

Route::get('/table', function () { return view('Backend.layouts.content.data_table'); });


Route::get('/', function () {

    // $phone = User::find('1');
    // $phone = User::find('2')->phone;
    // return $phone;
    // $user = Phones::find(1);
    // $user = Phones::find(2)->user;
    $users = User::all();
    // return $users;


    // $comments =Post::find(1);
    // $comments =Post::find(1)->comments;
    // // $comments =Post::find(1)->comments;
    // // return $comments;

    // $post =Comment::find(1);
    // $post =Comment::find(2)->post;

    $posts= Post::with('comments')->get();
    // return $posts;


    // $posts= Post::all();
    // $posts= Post::with('cetegories')->get();


    return view('Frontend.relation', compact('users','posts'));
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




// Product CRUD

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
// Route::delete('/product/{id}/delete', [ProductController::class, 'destroy']);
Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);




//Slider CRUD
// Route::get('/sliders', 'SliderController@index');


Route::get('/slider', [SliderController::class, 'index'])->middleware('auth');
Route::get('/slider/create', [SliderController::class, 'create']);
Route::post('/slider', [SliderController::class, 'store']);
Route::get('/slider/{id}/edit', [SliderController::class, 'edit']);
Route::put('/slider/{id}/update', [SliderController::class, 'update']);
Route::delete('/slider/{id}/delete', [SliderController::class, 'destroy']);



Route::get('/d', function(){
    return view('Frontend.relation');
});



//University-- teacher CRUD

Route::get('/teacher', [TeacherController::class,'index']);
Route::get('/teacher/create', [TeacherController::class,'create']);
Route::post('/teacher', [TeacherController::class, 'store']);
Route::get('/teacher/{id}/edit', [TeacherController::class, 'edit']);
Route::put('/teacher{id}/update', [TeacherController::class, 'update']);
Route::delete('/teacher/{id}/delete', [TeacherController::class, 'destroy']);
