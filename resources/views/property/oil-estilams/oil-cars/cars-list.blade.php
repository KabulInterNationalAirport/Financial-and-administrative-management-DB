@extends('property.layout.master')
@section('contents')
<div class="app-content main-content">
    <div class="side-app main-container">
        <!-- PAGE HEADER -->
        <div class="page-header ">

            {{-- د نوي تیلو د شرکت د اضافه کولو لپاره ماډل --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">د موټر مشخصات</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div>
                                    <label for="driver-name" class="col-form-label">د ډرېور نوم:</label>
                                    <input type="text" class="form-control" id="driver-name">
                                </div>
                                <div>
                                    <label for="father-name" class="col-form-label">ولد:</label>
                                    <input type="text" class="form-control" id="father-name">
                                </div>
                                <div>
                                    <label for="id-number" class="col-form-label">تذکرې نمبر:</label>
                                    <input type="text" class="form-control" id="id-number">
                                </div>
                                <div>
                                    <label for="car-id-number" class="col-form-label">نمبر پلېټ:</label>
                                    <input type="text" class="form-control" id="car-id-number">
                                </div>
                                <div>
                                    <label for="oil-quantity" class="col-form-label">تیلو حجم:</label>
                                    <input type="text" class="form-control" id="oil-quantity">
                                </div>
                                <div>
                                    <label for="date" class="col-form-label">تاریخ:</label>
                                    <input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYY"
                                        id="date">
                                </div>
                                <div>
                                    <label for="org-name" class="col-form-label">د شرکت نوم:</label>
                                    <input type="text" class="form-control" id="org-name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند
                                کړۍ</button>
                            <button type="button" class="btn btn-primary">ذخیره کړۍ</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- د ماډل پای --}}
            <div class="page-leftheader">
                <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">
                    نوی اضافه کړۍ <i class="fa-solid fa-plus"></i></button>
            </div>

        </div>
        <!-- END PAGE HEADER -->
        <!-- ROW -->
        <div class="main-proifle">
            <!-- ROW -->
            <div class="header text-center">
                <div class="page-title">د موټرو لیست</div>
            </div>
            <div class="table-responsive">
                <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                    <thead class="bg-success">
                        <tr>
                            <th class="">نمبر</th>
                            <th class="">د ډرېور نوم</th>
                            <th class="">ولد</th>
                            <th class="">تذکرې نمبر</th>
                            <th class="">نمبر پلېټ</th>
                            <th class=""> د تیلو حجم</th>
                            <th class="">تاریخ</th>
                            <th class="">شرکت</th>
                            <th class=""> عملیې</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>خان مامد</td>
                            <td>
                                ګل محمد
                            </td>
                            <td>
                                ۱۶۱۶۰۰۲
                            </td>
                            <td>
                                4545
                            </td>
                            <td>۴</td>
                            <th class="">2024/34/3</th>
                            <th class="">ارو پطرولیم</th>
                            <td>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                        data-bs-target="#editprojectmodal">
                                        <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="تغیر کول"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="footer ">
                <button class="btn btn-primary " onClick="javascript:window.print();"><i class="si si-wallet"></i> Pdf
                </button>
                <button class="btn btn-secondary " onClick="javascript:window.print();"><i
                        class="si si-paper-plane"></i>Excel</button>
                <button class="btn btn-info " onClick="javascript:window.print();"><i class="si si-printer"></i>
                    Print</button>
            </div>

            <!-- END  ROW -->
        </div>

    </div>
</div>
@endsection