<?php

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
    $param = request('param');
    return view('welcome', [
        'param1' => $param
    ]);
});

Route::get('/json/{Mame}', function ($Mame) {
    return [
        'base' => 'standard',
        'toppings' => 'vegetable',
        'add-on' => 'ketchup',
        'hihi' => $Mame
    ];
});

Route::get('/pizza', function () {
    $table = [
        ['dsa', 'sda', 'sdad'],
        ['qư', 'eqwe', 'ewqeq']
    ];
    $data = [
        'string' => 'Trung Dep Zai',
        'list' => ['Đẹp', 'Trai', 'Có', 'Gì', 'Sai'],
        'table' => $table
    ];
    return view('pizza', $data);
});