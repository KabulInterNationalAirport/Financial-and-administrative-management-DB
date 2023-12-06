@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="/new-qarardads"class="btn btn-primary " >نوی اضافه کړۍ</a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="header text-center">
                    <div class="page-title">د استلامو لیست</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th class="border-bottom-0">تاریخ</th>
                                <th class="border-bottom-0">شرکت</th>
                                <th class="border-bottom-0">موټرو تعداد</th>
                                <th class="border-bottom-0">د تیلو اندازه</th>
                                <th class="border-bottom-0">تعقیبی شخص</th>
                                <th class="border-bottom-0">عملیې</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12-02-2021</td>
                                <td>
                                    ارو پطرولیم
                                </td>
                                <td>
                                  7
                                </td>
                                <td>
                                10 ton
                                </td>
                                <td>احمد</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/view-estilam" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د استلام کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د استلام تغیر کول"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="fa-solid fa-print  text-secondary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title=" استلام پرینټ"></i>
                                        </a>
                                       
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
