@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        {{-- <Button class="btn btn-primary " >نوی قرارداد اضافه کړۍ</Button> --}}
                        <a href="/new-qarardads"class="btn btn-primary " >نوی قرارداد اضافه کړۍ</a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="header text-center">
                    <div class="page-title">د قراردادو لیست</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th class="border-bottom-0">نمبر</th>
                                <th class="border-bottom-0"> قرارداد نمبر</th>
                                <th class="border-bottom-0">قرار داد</th>
                                <th class="border-bottom-0">قرار داد وجه</th>
                                <th class="border-bottom-0">کمپنۍ/شرکت</th>
                                <th class="border-bottom-0">اجرأ کونکي نمبر</th>
                                <th class="border-bottom-0">شروع نیټه</th>
                                <th class="border-bottom-0">ختم نیټه</th>
                                <th class="border-bottom-0">حالت</th>
                                <th class="border-bottom-0">عملیې</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    6
                                </td>
                                <td>
                                   د لابراتوار جوړول
                                </td>
                                <td>
                                    د کرونا ټیسټ 
                                </td>
                                <td>بیوتیک ۱ طبی لابراتوار</td>
                                <td>۰۷۹۰۱۶۱۶۰۰</td>
                                <td>12-02-2021</td>
                                <td>12-02-2021</td>
                                
                                <td><span class="badge badge-success">complete</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="project-view.html" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د قرار داد کتل"><i
                                                class="feather feather-eye text-primary"></i></a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د قرار داد تغیر کول"></i>
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
