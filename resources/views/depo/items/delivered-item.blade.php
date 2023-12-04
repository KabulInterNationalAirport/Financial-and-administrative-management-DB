@extends('depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        توزیع شوي اجناس</div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">د جنس توزیع</h1>
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
                                        <label for="quantity" class="col-form-label">تعداد:</label>
                                        <input type="number" class="form-control" id="quantity">
                                    </div>
                                    <div>
                                        <label for="wahid" class="col-form-label">واحد:</label>
                                        <input type="number" class="form-control" id="wahid">
                                    </div>
                                    <div class="">
                                        <label for="price" class="col-form-label">قیمت:</label>
                                        <input type="number" class="form-control" id="price">
                                    </div>
                                    <div>
                                        <label for="Trustee-name" class="col-form-label">مجموعه:</label>
                                        <input type="text" class="form-control" id="Trustee-name">
                                    </div>
                                    <div>
                                        <label for="f-s9-number" class="col-form-label">د پیشنهاد نمبر:</label>
                                        <input type="number" class="form-control" id="f-s9-number">
                                    </div>
                                    <div>
                                        <label for="order-number" class="col-form-label"> د پیشنهاد تاریخ:</label>
                                        <input type="number" class="form-control" id="order-number">
                                    </div>
                                    <div>
                                        <label for="administration" class="col-form-label">د پیشنهاد اداره:</label>
                                        <input type="text" class="form-control" id="administration">
                                    </div>
                                    <div>
                                        <label for="buyer" class="col-form-label"> د توزیع تاریخ:</label>
                                        <input type="text" class="form-control" id="buyer">
                                    </div>
                                    <div>
                                        <label for="buyer" class="col-form-label"> د اخیستونکي نوم او تخلص:</label>
                                        <input type="text" class="form-control" id="buyer">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند کړۍ</button>
                                <button type="button" class="btn btn-primary">ذخیره کړۍ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-rightheader">
                    <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">د جنس اضافه کول <i
                            class="fa-solid fa-plus"></i></button>
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
                                    <a href="hr-addemployee.html" class="btn btn-outline-light">Copy</a>
                                </div>
                                <div class="btn-list">
                                    <a href="hr-addemployee.html" class="btn btn-outline-light">Print</a>
                                </div>
                                <div class="btn-list">
                                    <a href="hr-addemployee.html" class="btn btn-outline-light">PDF</a>
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
                                <th>تعداد</th>
                                <th>واحد</th>
                                <th>قیمت</th>
                                <th>مجموعه</th>
                                <th>پیشنهاد نمبر</th>
                                <th>د پیشنهاد تاریخ</th>
                                <th>د پیشنهاد اداره</th>
                                <th>د توزیع تاریخ</th>
                                <th>اخیستونکی</th>
                                <th>تشریحات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴</td>
                                <td>۳</td>
                                <td>عدد</td>
                                <td>۱۰۰۰۰</td>
                                <td>۳۰۰۰۰</td>
                                <td>۱۲</td>
                                <td>۱۴۰۲/۹/۱۲</td>
                                <td>آی ټي</td>
                                <td>۱۴۰۲/۹/۱۲</td>
                                <td>عبدالصبور همت</td>
                                <td>
                                    <a href="#" class="btn small btn-outline-dark">تشریحات <i
                                            class="fa-solid fa-circle-info"></i></a>
                                </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <a href="#" class="btn small btn-outline-dark">تشریحات <i
                                        class="fa-solid fa-circle-info"></i></a>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <a href="#" class="btn small btn-outline-dark">تشریحات <i
                                        class="fa-solid fa-circle-info"></i></a>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <a href="#" class="btn small btn-outline-dark">تشریحات <i
                                        class="fa-solid fa-circle-info"></i></a>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <a href="#" class="btn small btn-outline-dark">تشریحات <i
                                        class="fa-solid fa-circle-info"></i></a>
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
