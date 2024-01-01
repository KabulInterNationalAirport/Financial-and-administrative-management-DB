@extends('layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('layout-Financial.dashboard')}}</span>
                        {{__('layout-Financial.kabul-airport')}} </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    {{-- <div class="col">
                        <div class="card it border-bottom card1">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.department-office')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/department.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/payroll"
                                        class="btn btn-outline-success it1 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-4">
                        <div class="card border-bottom card2">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.financial-and-administrative-management')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/financail.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/main-report"
                                        class="btn btn-outline-dark it2 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col">
                        <div class="card  border-bottom card3">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.it')}}</p2>
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
                    </div> --}}
                </div>
                {{-- <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card  border-bottom card7">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.ground-handling')}}</p2>
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
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.security-aviation')}} </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/security.png')}}" class="card-img-top img-fluid"
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
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.operational-m')}} </p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/hard.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="department.html"
                                        class="btn btn-outline-dark it9 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3 g-3">
                    <div class="col-4">
                        <div class="card  border-bottom card7">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.vip')}}</p2>
                                </h5>
                            </div>
                            <div class="card-image-wrapper">
                                <img src="{{asset('assets/images/brand/vip.png')}}" class="card-img-top img-fluid" alt="...">
                                <h1 class="text-center"><a href="/accounting"
                                        class="btn btn-outline-info it7 border-bottom  font-weight-bold border-top">{{__('layout-Financial.enter')}}</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card  border-bottom card8">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center text-muted">{{__('layout-Financial.kabul-airport')}}<br><br>
                                    <p2 class="font-weight-bold text-dark">
                                        {{__('layout-Financial.technical m')}} </p2>
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection
