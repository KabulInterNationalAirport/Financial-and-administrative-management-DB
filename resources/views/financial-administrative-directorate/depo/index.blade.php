@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('layout-Financial.dashboard')}}</span>
                        {{__('layout-Financial.depot-management')}}</div>
                </div>
            </div>
            <div class="custom-container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class=" text-start"> <span class="fs-14 font-weight-semibold">مکمل اجناس</span>
                                            <h3 class="">6,578</h3>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-success my-auto  float-end"> <i class="fa-regular fa-folder"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class=" text-start"> <span class="fs-14 font-weight-semibold">نوي راغلي اجناس</span>
                                            <h3 class="">6,578</h3>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-success my-auto  float-end"> <i class="fa-solid fa-file-lines"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class=" text-start"> <span class="fs-14 font-weight-semibold">خراپ شوي اجناس</span>
                                            <h3 class="">6,578</h3>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-success my-auto  float-end"> <i class="fa-solid fa-dumpster-fire"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-sm-1 row-1 row-cols-md-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="text-start"> <span class="fs-14 font-weight-semibold">توزیع شوي اجناس</span>
                                            <h3 class="">124</h3>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-primary my-auto  float-end"> <i
                                                class="feather feather-box"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class=" text-start"> <span class="fs-14 font-weight-semibold">بودیجه</span>
                                            <h3 class="">$2,7853</h3>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-secondary brround my-auto  float-end"> <i
                                                class="feather feather-dollar-sign"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class=" text-start"> <span class="fs-14 font-weight-semibold">باقی مانده اجناس</span>
                                            <h3 class="">6,578</h3>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon1 bg-success my-auto  float-end"><i class="fa-solid fa-basketball"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-proifle">
                <div class="page-header  border-0 responsive-header  d-xl-flex d-block">
                    <h4 class="card-title">د چارټو یو مثال</h4>
                    <div class="card-options me-3">
                        <div class="btn-list">
                            <a href="javascript:void(0);"
                                class="btn btn-outline-light text-dark float-start me-4 d-flex  my-1"><span
                                    class="dot-label bg-light4 me-2 my-auto"></span>راغلي</a>
                            <a href="javascript:void(0);"
                                class="btn btn-outline-light text-dark float-start me-4 d-flex  my-1"><span
                                    class="dot-label bg-primary me-2 my-auto"></span>تللي</a>
                            <a href="javascript:void(0);" class="btn btn-outline-light my-1" data-bs-toggle="dropdown"
                                aria-expanded="false"> کال <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                <li><a href="javascript:void(0);">میاشتنی</a></li>
                                <li><a href="javascript:void(0);">کلنی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="chartbar" class="h-400"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
