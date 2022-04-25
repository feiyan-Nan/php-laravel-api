<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login', function () {
//    echo 'login';
//    print_r($this->rouer->getCurrentRoute());
    $arr = [
        'data' => [
            'name' => 'hangman',
            "age" => 23,
            "sex" => '女'
        ],
        'dd' => [
            'name' => 'hangman',
            "age" => 23,
            "sex" => '女'
        ]

    ];
    print_r(json_encode($arr));
});

Route::get('email/{name?}', function ($name = '默认') {
    print_r(Route::currentRouteAction());

    echo $name;
});
