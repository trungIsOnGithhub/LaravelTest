<?php

use Illuminate\Support\Facades\Route;
use App\Cc;
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
    $allcc = Cc::all();

    $cc1 = Cc::orderBy('tt', 'desc')->get();
    $cc2 = Cc::where('id', 2)->get();

    error_log($allcc);
    error_log($cc1);
    error_log($cc2);

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