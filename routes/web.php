<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Route::fallback(function () {
    return view('entrypoint');
});

/**
 * NOTE
 * This was my attempt at authentication / auth, however, I was struggling to
 * access the UI side of the project due to errors. This made implementing 
 * authentication / auth too difficult, as I couldn't simulate any logins.
 *  I believe this is due to 
 * my Docker config, and I have left notes on the README.
 */
Route::get('/setup', function() {
    // $credentials = [
    //     'email' => 'admin@admin.com',
    //     'password' => 'password'
    // ];
    
    // if (!Auth::attempt($credentials)) {
    //     $user = new \App\Models\User();

    //     $user->name = 'Admin';
    //     $user->email = $credentials['email'];
    //     $user->password = Hash::make($credentials['password']);

    //     $user->save();

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
    //         $updateToken = $user->createToken('update-token', ['create', 'update']);
    //         $basicToken = $user->createToken('basic-token');

    //         return [
    //             'admin' => $adminToken->plainTextToken,
    //             'update' => $updateToken->plainTextToken,
    //             'basic' => $basicToken->plainTextToken,
    //         ];
    //     }
    // }
});
