@extends('depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        د مکملو اجناسو لیست</div>
                </div>
                <div class="page-rightheader">
                    {{-- د نوي جنس د اضافه کولو لپاره ماډل --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">د جنس مشخصات</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div>
                                            <label for="cagegory-name" class="col-form-label">کټګوري:</label>
                                            <input type="text" class="form-control" id="cagegory-name">
                                        </div>
                                        <div>
                                            <label for="item-name" class="col-form-label">نوم:</label>
                                            <input type="text" class="form-control" id="item-name">
                                        </div>
                                        <div>
                                            <label for="item-name" class="col-form-label">واحد:</label>
                                            <input type="text" class="form-control" id="item-name">
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
                    <div class="page-rightheader">
                        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">د جنس اضافه
                            کول <i class="fa-solid fa-plus"></i></button>
                    </div>

                </div>
            </div>
            <div class="">
                <div class="main-proifle">
                    <div class="card-header border-bottom-0">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                        aria-label="Search" tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto ">
                            <button class="btn btn-primary mt-4" onClick="javascript:window.print();"><i
                                    class="si si-wallet"></i> Pdf </button>
                            <button class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i
                                    class="si si-paper-plane"></i>Excel</button>
                            <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                    class="si si-printer"></i> Print</button>
                        </div>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>کټګوري</th>
                                <th>نوم</th>
                                <th>د ټولو اجناسو تعداد</th>
                                <th>واحد</th>
                                <th>د باقی مانده اجناسو تعداد</th>
                                <th>تشریحات</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- د یوه جنس مشخصاتو د لیدلو لپاره ماډل --}}
                            <div class="modal fade" id="details" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">د جنس مشخصات</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div>
                                                    <label for="cagegory-name" class="col-form-label">کټګوري:</label>
                                                    <input type="text" class="form-control" id="cagegory-name">
                                                </div>
                                                <div>
                                                    <label for="item-name" class="col-form-label">نوم:</label>
                                                    <input type="text" class="form-control" id="item-name">
                                                </div>
                                                <div>
                                                    <label for="item-name" class="col-form-label">واحد:</label>
                                                    <input type="text" class="form-control" id="item-name">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary mt-4" onClick=""><i
                                                    class="si si-wallet"></i> Pdf </button>
                                            <button class="btn btn-secondary mt-4" onClick=""><i
                                                    class="si si-paper-plane"></i>Excel</button>
                                            <button class="btn btn-info mt-4" onClick=""><i
                                                    class="si si-printer"></i> Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- د ماډل پای --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    {{-- <a href="#"  class="btn small btn-outline-dark">تشریحات</a> --}}
                                    <Button class="btn small btn-outline-dark" data-bs-target="#details"
                                        data-bs-toggle="modal">تشریحات</Button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card-body ">
                        <ul class="pagination mg-b-0 page-0 ">
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-left"></i></a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link hidden-xs-down" href="javascript:void(0);">4</a>
                            </li>

                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
