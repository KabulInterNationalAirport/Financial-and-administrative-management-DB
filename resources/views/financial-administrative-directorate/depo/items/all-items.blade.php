@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/all-products.list-of-all-products') }}</div>
                </div>
                <div class="page-rightheader">
                    {{-- د نوي جنس د اضافه کولو لپاره ماډل --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        {{ __('depo/all-products.product-details') }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div>
                                            <label for="cagegory-name"
                                                class="col-form-label">{{ __('depo/all-products.category') }}:</label>
                                            <input type="text" class="form-control" id="cagegory-name">
                                        </div>
                                        <div>
                                            <label for="item-name"
                                                class="col-form-label">{{ __('depo/all-products.name') }}:</label>
                                            <input type="text" class="form-control" id="item-name">
                                        </div>
                                        <div>
                                            <label for="item-name"
                                                class="col-form-label">{{ __('depo/all-products.unit') }}:</label>
                                            <input type="text" class="form-control" id="item-name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">{{ __('depo/all-products.cancel') }}
                                    </button>
                                    <button type="button"
                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- د ماډل پای --}}
                    <div class="page-rightheader header">
                        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">
                            {{ __('depo/all-products.add-product') }} <i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="main-proifle">
                    <div class="card-header border-bottom-0">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small"
                                        placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                        tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto ">
                            <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                    class="si si-printer"></i> {{ __('depo/all-products.print') }}</button>
                        </div>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead class="bg-info">
                            <tr>
                                <th>{{ __('depo/all-products.id') }}</th>
                                <th>{{ __('depo/all-products.category') }}</th>
                                <th>{{ __('depo/all-products.name') }}</th>
                                <th>{{ __('depo/all-products.total-number-of-products') }}</th>
                                <th>{{ __('depo/all-products.unit') }}</th>
                                <th>{{ __('depo/all-products.remaining-products') }}</th>
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
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴ ماډل</td>
                                <td>۱۲۱</td>
                                <td>عدد</td>
                                <td> ۱۲۰</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ----------- pagination-links ---------------- --}}
                    <div class="card-body footer">
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
                    {{-- -=------------ end of pagination links ---------------- --}}
                </div>
            </div>
        </div>
    </div>
@endsection
