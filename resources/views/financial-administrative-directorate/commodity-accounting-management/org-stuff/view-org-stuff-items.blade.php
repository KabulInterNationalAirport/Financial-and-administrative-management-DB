@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-proifle">
                        <div class="card-body">
                            <div class="invoice-header text-end d-block mb-5">
                                <h1 class="invoice-title font-weight-semibold text-uppercase text-center mb-1">
                                    {{ __('depo/employees.list-of-items-registered-to-the-employee') }}</h1>
                            </div><!-- invoice-header -->
                            <div class="row mt-4 page-header">
                                <div class="col-md">
                                    <h3>{{ __('depo/employees.employee-information') }}</h3>
                                    <h5>{{ __('depo/delivered-products.name') }}: Abdul Saboor hemat</h5>
                                    <h5> {{ __('depo/employees.mobile') }}: 0790161600</h5>
                                    <h5>{{ __('depo/employees.email') }}: saboorhemat@gmail.com</h5>
                                    <h5> {{ __('depo/employees.related-office') }}: آی ټي</h5>
                                    <h5>{{ __('depo/employees.job-title') }}: د سیستم جوړولو عمومي مدیر</h5>
                                    <h5>{{ __('depo/employees.id-card') }}: 123456</h5>
                                </div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table  table-vcenter text-center table-bordered " id="hr-table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th>{{ __('depo/delivered-products.id') }}</th>
                                            <th>{{ __('depo/delivered-products.category') }}</th>
                                            <th>{{ __('depo/delivered-products.name') }}</th>
                                            <th>{{ __('depo/delivered-products.quantity') }}</th>
                                            <th>{{ __('depo/delivered-products.unit') }}</th>
                                            <th>{{ __('depo/delivered-products.price') }}</th>
                                            <th>{{ __('depo/delivered-products.total-price') }}</th>
                                            <th>{{ __('depo/delivered-products.based-on') }}</th>
                                            <th>{{ __('depo/delivered-products.number') }}</th>
                                            <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                            <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                            <th>{{ __('employee.actions') }}</th>
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
                                            <td>مکتوب</td>
                                            <td>۱۲</td>
                                            <td>۱۴۰۲/۹/۱۲</td>
                                            <td>۱۴۰۲/۹/۱۲</td>
                                            <td>
                                                <a class="btn btn-outline-primary  btn-sm" href="/uuu">
                                                    {{ __('depo/employees.edit') }}
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="text-center">تخنیکی اجناس</h2>
                            <table class="table table-bordered text-center mt-4">
                                <thead class="bg-info">
                                    <tr>
                                        <th>{{ __('depo/new-arrivals.id') }}</th>
                                        <th>{{ __('depo/new-arrivals.category') }}</th>
                                        <th>{{ __('depo/new-arrivals.name') }}</th>
                                        <th>{{ __('depo/new-arrivals.serial-no') }}</th>
                                        <th>{{ __('depo/new-arrivals.ram') }}</th>
                                        <th>{{ __('depo/new-arrivals.hd') }}</th>
                                        <th>{{ __('depo/new-arrivals.color') }}</th>
                                        <th>{{ __('depo/new-arrivals.quantity') }}</th>
                                        <th>{{ __('depo/new-arrivals.unit') }}</th>
                                        <th>{{ __('depo/new-arrivals.price') }}</th>
                                        <th>{{ __('depo/new-arrivals.total-price') }}</th>
                                        <th>{{ __('depo/delivered-products.based-on') }}</th>
                                        <th>{{ __('depo/delivered-products.number') }}</th>
                                        <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                        <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                        <th>{{ __('employee.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>کمپیوټر</td>
                                        <td>ډیل ۳۳۳۴</td>
                                        <td>ks3kfj453</td>
                                        <td>16GB</td>
                                        <td>512SSD</td>
                                        <td>Red</td>
                                        <td>۳</td>
                                        <td>عدد</td>
                                        <td>۱۰۰۰۰</td>
                                        <td>۳۰۰۰۰</td>
                                        <td>مکتوب</td>
                                        <td>۱۲</td>
                                        <td>۱۴۰۲/۹/۱۲</td>
                                        <td>۱۴۰۲/۹/۱۲</td>
                                        <td>
                                            <a class="btn btn-outline-primary  btn-sm" href="/uuu">
                                                {{ __('depo/employees.edit') }}
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="text-center">موټرونه</h2>
                            <table class="table table-bordered text-center ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>{{ __('depo/car.id') }}</th>
                                        <th>{{ __('depo/car.name') }}</th>
                                        <th>{{ __('depo/car.model') }}</th>
                                        <th>{{ __('depo/car.engine-no') }}</th>
                                        <th>{{ __('depo/car.color') }}</th>
                                        <th>{{ __('depo/car.no-palat') }}</th>
                                        <th>{{ __('depo/car.quantity') }}</th>
                                        <th>{{ __('depo/car.unit') }}</th>
                                        <th>{{ __('depo/car.price') }}</th>
                                        <th>{{ __('depo/car.total-price') }}</th>
                                        <th>{{ __('depo/delivered-products.based-on') }}</th>
                                        <th>{{ __('depo/delivered-products.number') }}</th>
                                        <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                        <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                        <th>{{ __('employee.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>corola</td>
                                        <td>2005</td>
                                        <td>2354</td>
                                        <td>red</td>
                                        <td>kbl12345</td>
                                        <td>2</td>
                                        <td>unit</td>
                                        <td>122222</td>
                                        <td>2333333</td>
                                        <td>مکتوب</td>
                                        <td>۱۲</td>
                                        <td>۱۴۰۲/۹/۱۲</td>
                                        <td>۱۴۰۲/۹/۱۲</td>
                                        <td>
                                            <a class="btn btn-outline-primary  btn-sm" href="/uuu">
                                                {{ __('depo/employees.edit') }}
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="float-end footer">
                                <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                        class="si si-printer"></i> {{ __('depo/all-products.print') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->
        </div>
    </div>
@endsection
