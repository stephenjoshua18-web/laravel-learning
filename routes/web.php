<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
    // $user = DB::table('users')->find(1);
    // create new user
    $user = User::create([
            'name' => 'Ojoro',
            'email' => 'ojoro@gmail.com',
            'password' => 'onionbooty',
    ]);
    // ]);
    //update user
    // $users = User::find(1);

    //delete users
    // $user = DB::delete('delete from users where id=2');

    dd($user);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
