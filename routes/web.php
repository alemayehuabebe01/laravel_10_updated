<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    // return view('welcome');
   
    // we use this  for feach all the data from the database 
    $user = DB::select('select * from users');

    //let create the new table
    // $users = DB::insert('insert into users(name,email,password) values(?,?,?)',[
    // 'ALexs',
    // 'alexsa@gmail.com',
    // 'password'
    
    // ]);

    //how to update the data table in laravel

    // $affected = DB::update(
    //     "update users set name = 'alexsa' where id=2");

    //here if we are to delete data

    // $deleteData = DB::delete("delete from users where id = 2");
    dd($user);


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
