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

// Route::get("/report", function () {
//     return view("report");
// });

// Route::get("/depo", function () {
//     return view("./depo/index");
// });
// Route::get("/all-items", function () {
//     return view("./depo/items/all-items");
// });
// Route::get("/new-arrival-items", function () {
//     return view("./depo/items/new-items");
// });

// Route::get("/delivered-items", function () {
//     return view("./depo/items/delivered-item");
// });
// Route::get("/damaged-items", function () {
//     return view("./depo/items/damaged-items");
// });

// Route::get("/depo-emp", function () {
//     return view("./depo/employee/employee-list");
// });

// Route::get("/depo-emp-add", function () {
//     return view("./depo/employee/add-employee");
// });

// Route::get("/depo-emp-items", function () {
//     return view("./depo/employee/view-employee-items");
// });

// Route::get("/motamid", function () {
//     return view("./depo/motamid/motamid-list");
// });

// Route::get("/motamid-items", function () {
//     return view("./depo/motamid/view-motamid-items");
// });


// Route::get("/employee", function () {
//     return view("./employee/Employee-list");
// });


// Route::get("/add-employee", function () {
//     return view("./employee/add-Employee");
// });

// Route::get("/view-employee", function () {
//     return view("./employee/view-Employee");
// });

Route::get("/property", function () {
    return view("./property/index");
});

Route::get("/qarardads", function () {
    return view("./property/qrardads/qarar-dads-list");
});

Route::get("/new-qarardads", function () {
    return view("./property/qrardads/new-qarar-dad");
});


Route::get("/view-qarardad", function () {
    return view("./property/qrardads/view-qarar-dad");
});

Route::get("/estilam", function () {
    return view("./property/oil-estilams/estilam-list");
});

Route::get("/oil-company", function () {
    return view("./property/oil-estilams/oil-company-qarar-dad/oil-qarar-dad");
});

Route::get("/view", function () {
    return view("./property/oil-estilams/oil-company-qarar-dad/view-qarar-dad");
});


Route::get("/view-estilam", function () {
    return view("./property/oil-estilams/view-estilam");
});