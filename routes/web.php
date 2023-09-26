<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    // return view('welcome');
    // fetch all users 
    $users = DB::table('users')->find(1);
    // create new user
    // $user = DB::table('users')->insert([
    // 'name' => 'Joshteamgifted',
    // 'email' => 'primexchange46@gmail.com',
    // 'password' => 'password',
    // ]);
    // ]);
    //update user
    // $user = DB::table('users')
    //           ->where('id', 3)
    //           ->delete();
    //delete users
    // $user = DB::delete('delete from users where id=2');

    dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
