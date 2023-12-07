@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="/add-revenue"class="btn btn-primary " >نوې تجارتي ساحه اضافه کړۍ</a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="header text-center">
                    <div class="page-title">د تجارتي ساحو لیست</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th class="">نمبر</th>
                                <th class="">د قرار داد شهرت</th>
                                <th class="">ماشتنۍ کرایه</th>
                                <th class="">مساحت به مترمربع</th>
                                <th class="">موقیعت</th>
                                <th class=""> شروع نیټه</th>
                                <th class=""> ختم نیټه</th>
                                <th class="">فعالیت ډول</th>
                                <th class="">حالت</th>
                                <th class="">عملیې</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    عبدالصبور همت
                                </td>
                                <td>
                                   12000  
                                </td>
                                <td>
                                    ۲۲۰ 
                                </td>
                                <td>هوايي میدان ته څیرمه</td>
                                <td>12-02-2021</td>
                                <td>12-02-2021</td>
                                <td>آمریت دفتر</td>
                                
                                <td><span class="badge badge-success">تکمیل</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/view-qarardad-details" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د قرار داد کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د قرار داد تغیر کول"></i>
                                        </a>
                                        <a href="/view-qarardad" class="action-btns1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="د قرار داد پرینټ"><i class="fa-solid fa-print  text-secondary"></i></a>
                                       
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
                <div class="footer ">
                    <button class="btn btn-primary " onClick="javascript:window.print();"><i
                            class="si si-wallet"></i> Pdf </button>
                    <button class="btn btn-secondary " onClick="javascript:window.print();"><i
                            class="si si-paper-plane"></i>Excel</button>
                    <button class="btn btn-info " onClick="javascript:window.print();"><i
                            class="si si-printer"></i> Print</button>
                </div>

                <!-- END  ROW -->
            </div>

        </div>
    </div>
@endsection
