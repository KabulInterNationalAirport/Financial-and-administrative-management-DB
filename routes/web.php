<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get("/accounting", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/index");
        });
        
        Route::get("/", function () {
            return view("index");
        });

        // Route::get("/reportall", function () {
        //     return view("report");
        // });

        // Route::get("/print-report", function () {
        //     return view("print-report");
        // });
        Route::get("/financial", function () {
            return view("./financial-administrative-directorate/index");
        });

        Route::get("/acc-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/org-stuff-list");
        });

        Route::get("/acc-add-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/add-org-stuff");
        });

        Route::get("/acc-update-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/update-org-stuff");
        });

        Route::get("/acc-emp-items", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/view-org-stuff-items");
        });

        Route::get("/acc-emp-item-reg", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/products/reg-product-org-stuff");
        });
        Route::get("/acc-emp-car-reg", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/products/reg-car");
        });
        Route::get("/uuu", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/update-product");
        });






        Route::get("/depo", function () {
            return view("./financial-administrative-directorate/depo/index");
        });

        Route::get("/report", function () {
            return view("./financial-administrative-directorate/report");
        });
        
        Route::get("/depo-report", function () {
            return view("./financial-administrative-directorate/depo/report");
        });
        
        Route::get("/report-print", function () {
            return view("./financial-administrative-directorate/print-report");
        });
        Route::get("/all-items", function () {
            return view("./financial-administrative-directorate/depo/items/all-items");
        });
        Route::get("/new-arrival-items", function () {
            return view("./financial-administrative-directorate/depo/items/new-arrival-list");
        });
        Route::get("/add-arrival-items", function () {
            return view("./financial-administrative-directorate/depo/items/add-new-arrivals");
        });
        Route::get("/add-it-arrival-items", function () {
            return view("./financial-administrative-directorate/depo/items/add-it-new-arrivals");
        });
        
        Route::get("/delivered-items", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/products/delivered-products");
        });
        Route::get("/damaged-items", function () {
            return view("./financial-administrative-directorate/depo/items/damaged-items");
        });
        
        Route::get("/depo-car", function () {
            return view("./financial-administrative-directorate/depo/cars/add-car");
        });
        Route::get("/update-car", function () {
            return view("./financial-administrative-directorate/depo/cars/update-car");
        });
        Route::get("/depo-car-list", function () {
            return view("./financial-administrative-directorate/depo/cars/cars-list");
        });
        
        Route::get("/depo-emp-add", function () {
            return view("./financial-administrative-directorate/depo/employee/add-employee");
        });
        
        Route::get("/terminals", function () {
            return view("./financial-administrative-directorate/terminals/index");
        });
        
        Route::get("/motamid", function () {
            return view("./financial-administrative-directorate/depo/motamid/motamid-list");
        });
        
        Route::get("/motamid-items", function () {
            return view("./financial-administrative-directorate/depo/motamid/view-motamid-items");
        });
        
        
        Route::get("/employee", function () {
            return view("./financial-administrative-directorate/employee/Employee-list");
        });
        
        
        Route::get("/add-employee", function () {
            return view("./financial-administrative-directorate/employee/add-Employee");
        });
        
        Route::get("/view-employee", function () {
            return view("./financial-administrative-directorate/employee/view-Employee");
        });
        
        
        // --------------- for property ------------------
        Route::get("/property", function () {
            return view("./financial-administrative-directorate/property/index");
        });
        
        Route::get("/qarardads", function () {
            return view("./financial-administrative-directorate/property/qrardads/list-qarar-dads");
        });
        
        Route::get("/new-qarardads", function () {
            return view("./financial-administrative-directorate/property/qrardads/add-qarar-dad");
        });
        Route::get("/property-report", function () {
            return view("./financial-administrative-directorate/property/report");
        });
        
        
        Route::get("/view-qarardad-details", function () {
            return view("./financial-administrative-directorate/property/qrardads/details-qarar-dad");
        });

        Route::get("/update-qarardad", function () {
            return view("./financial-administrative-directorate/property/qrardads/update-qarar-dad");
        });
        
        Route::get("/view-qarardad", function () {
            return view("./financial-administrative-directorate/property/qrardads/print-qarar-dad");
        });
        
        
        Route::get("/estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/list-estilam");
        });
        
        Route::get("/oil-company", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-company-qarar-dad/list-oil-qarar-dad");
        });
        
        Route::get("/view", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-company-qarar-dad/print-oil-qarar-dad");
        });
        
        
        Route::get("/view-estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/print-estilam");
        });
        
        
        Route::get("/add-estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/add-estilam");
        });
        
        Route::get("/estilam-details", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/details-estilam");
        });
        
        Route::get("/estilam-update", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/update-estilam");
        });
        
        
     
        
        Route::get("/revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/revenue-list");
        });
        
        Route::get("/add-revenue", function () {
            return view(".financial-administrative-directorate/property/revenue/add-revenue");
        });
        
        Route::get("/print-revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/print-revenue");
        });
        Route::get("/view-revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/view-revenue-details");
        });
        
        Route::get("/cars-list", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-cars/cars-list");
        });
        
        
        // -------------- for payroll management------------|
        
        
        Route::get("/payroll", function () {
            return view("./financial-administrative-directorate/payroll-management/index");
        });
        
        Route::get("/employee-list", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/employee-list");
        });
        
        // Route::get("/add-employee", function () {
        //     return view("./financial-administrative-directorate/payroll-management/employees/add-employee");
        // });
        
        Route::get("/print-doc", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/print-doc");
        });
        
        Route::get("/edit-employee", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/edit-employee");
        });
        
        Route::get("/extra-employees", function () {
            return view("./financial-administrative-directorate/payroll-management/retired-deceased-employees/employee-list");
        });
        
        Route::get("/print-documents", function () {
            return view("./financial-administrative-directorate/payroll-management/retired-deceased-employees/print-doc");
        });
        
        Route::get("/staff", function () {
            return view("./financial-administrative-directorate/payroll-management/general-staff-composition/staff-list");
        });
    });



    







    
// --------------- for DEPO --------------------