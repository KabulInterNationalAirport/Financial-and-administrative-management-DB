@extends('layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('layout-Financial.dashboard')}}</span>
                        Kabul InterNational AirPort </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card it border-bottom card1">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        Department Office</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/ryast.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/payroll"
                                        class="btn btn-outline-success it1 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-bottom card2">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        Financial and administrative</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/department.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/financial"
                                        class="btn btn-outline-dark it2 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card3">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        Information Technology</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/it.png')}}" width="180" height="180"
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
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.commodity-accounting-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/technical.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/accounting"
                                        class="btn btn-outline-info it7 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card8">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        مدیریت </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/operational.png')}}" class="card-img-top img-fluid"
                                    alt="...">
                                <h1 class="text-center"><a href="operational.html"
                                        class="btn btn-outline-success it8 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card  border-bottom card9">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">Kabul InterNational AirPort<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        مدیریت </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/secretory.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="department.html"
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
