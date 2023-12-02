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
                    <a href="@" class="btn btn-primary">د جنس اضافه کول
                        <i class="fa-solid fa-plus"></i>
                    </a>

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
                            <div class="align-items-end  right-content breadcrumb-right d-block d-flex">
                                <div class="btn-list">
                                    <a href="hr-addemployee.html" class="btn btn-outline-success">Copy</a>
                                </div>
                                <div class="btn-list">
                                    <a href="hr-addemployee.html" class="btn btn-outline-primary">PDF</a>
                                </div>
                                <div class="btn-list">
                                    <a href="hr-addemployee.html" class="btn btn-outline-secondary">PDF</a>
                                </div>
                            </div>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
                                    <a href="#" class="btn small btn-outline-success">تشریحات</a>
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
