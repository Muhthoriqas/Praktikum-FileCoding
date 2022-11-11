<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/siswa1', function () {
//     return view('siswa', ["nama" => "andi"]);
// })->name('siswaRoute');

Route::get('/user/{id}', function ($id) {
    return 'Ini User ke-' . $id;
});

Route::get('/admin/{username?}', function ($username = null) {
    if ($username === null) {
        return "Siapa anda?";
    } else {
        return 'Ini Admin dengan user-' . $username;
    }
});

Route::prefix('admin1')->group(function () {
    Route::get('/', function () {
        // Matches The "/admin1/users" URL
        return "Hello ini admin dashboar";
    });
    Route::get('/users', function () {
        // Matches The "/admin1/users" URL
        return "Hello ini users 0";
    });
    Route::get('/users1', function () {
        return "Hello ini users 1";

        // Matches The "/admin/users1" URL
    });
});

Route::get('/siswa', [StudentController::class, 'show'])->name('siswaRoute');