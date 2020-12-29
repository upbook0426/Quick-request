<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RequestformController;
use App\Http\Controllers\MailSendController;
use App\Http\Controllers\AddressesController;

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

//配送先一覧
Route::get("addresses", [AddressesController::class, "index"])->name(
    "addresses"
);
Route::get("addresses/{id}", [AddressesController::class, "view"])->name(
    "address"
);

//依頼書入力
Route::get("index", [RequestformController::class, "index"])->name("index"); //routeに名前

//PDF出力
Route::post("pdf", [PDFController::class, "generate_pdf"]);

//メール送信
Route::post("mail", [MailSendController::class, "send"]);
