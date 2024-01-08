@extends('financial-administrative-directorate.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('layout-Financial.dashboard')}}</span>
                        {{__('layout-Financial.financial-and-administrative-management')}} </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card it border-bottom card1">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.payroll-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/payr.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/payroll"
                                        class="btn btn-outline-success it1 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-bottom card2">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.general-real-estate-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/estate.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/property"
                                        class="btn btn-outline-dark it2 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card3">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.depot-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/depo.png')}}" width="180" height="180"
                                    class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="./depo"
                                        class="btn btn-outline-orange it3 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card  border-bottom card7">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.commodity-accounting-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/comm.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/commodity"
                                        class="btn btn-outline-info it7 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card8">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.management-of-terminals')}} </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/ter.png')}}" class="card-img-top img-fluid"
                                    alt="...">
                                <h1 class="text-center"><a href="/terminals"
                                        class="btn btn-outline-success it8 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card9">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                    {{__('layout-Financial.logistic')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/logistic.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/logistic"
                                        class="btn btn-outline-dark it9 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card  border-bottom card7">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.oil-discharge')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/oil2.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/oil-descharge"
                                        class="btn btn-outline-info it7 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card8">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.save-care')}} </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/save.png')}}" class="card-img-top img-fluid"
                                    alt="...">
                                <h1 class="text-center"><a href="/save-and-care"
                                        class="btn btn-outline-success it8 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card9">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                    {{__('layout-Financial.financial-adm-mang')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/fin1.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/financial-administrative"
                                        class="btn btn-outline-dark it9 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col-md-4">
                        <div class="card  border-bottom card9">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.financial-and-administrative-management')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                    {{__('layout-Financial.attendance')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/att.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/officers"
                                        class="btn btn-outline-dark it9 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
