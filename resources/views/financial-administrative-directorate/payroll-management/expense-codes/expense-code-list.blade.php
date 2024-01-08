@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        د مصرف کوډونه</div>
                </div>
                <div class="modal fade" id="staffModal" tabindex="-1" aria-labelledby="staffModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staffModalLabel">نوی کوډ اضافه کړۍ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('payroll-expense-codes.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div>
                                        <label for="position-name" class="col-form-label">د کوډ نوع:</label>
                                            <select name="code" class="form-control custom-select select2"
                                            data-placeholder="د کوډ نوع">
                                            <option label="د کوډ نوع"></option>
                                            <option value="1234">1234</option>
                                            <option value="567">567</option>
                                            <option value="8970">8970</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند کړۍ</button>
                                        <button type="submit" class="btn btn-primary">ذخیره کړۍ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                <!--END PAGE HEADER -->
                <!-- ROW -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-11">
                        <div class="card">
                            <div class="card-header  border-0">
                                <h4 class="page-title">د کوډونو لیست</h4>
                                <div class="page-rightheader ms-md-auto">
                                    <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                        <div class="btn-list">
                                            <button class="btn btn-primary" data-bs-target="#staffModal" data-bs-toggle="modal">کوډ اضافه کړۍ<i
                                                class="fa-solid fa-plus"></i></button>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center  table-vcenter text-nowrap table-bordered border-bottom"
                                        id="emp-attendance">
                                        <thead class="bg-info">
                                            <tr>
                                                <th>نمبر</th>
                                                <th>کوډ</th>
                                                <th>مجموعه پیسې</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($codes as $code)
                                            <tr>
                                                <td>{{$code->id}}</td>
                                                <td>{{$code->code}}</td>
                                                <td>{{$code->expense_amount}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-info " onClick="javascript:window.print();"><i
                                        class="si si-printer"></i> Print</button>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div>
        @endsection
