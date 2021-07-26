<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $response = Http::get('https://reqres.in/api/users/2');
    $data = $response->json();
    echo "Nama Lengkap : " . $data['data']['first_name'] . ' ' . $data['data']['last_name'] . "<br>";
    echo "Email : " . $data['data']['id'] . "<br>";
});

Route::get('/config', function () {
    echo env('APP_URL');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
