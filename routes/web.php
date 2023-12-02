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


Route::get("/", function () {
    return view("index");
});
Route::get("/report", function () {
    return view("report");
});

Route::get("/employee", function () {
    return view("./employee/Employee-list");
});


Route::get("/add-employee", function () {
    return view("./employee/add-Employee");
});

Route::get("/view-employee", function () {
    return view("./employee/view-Employee");
});
