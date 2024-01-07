@extends('financial-administrative-directorate.save-and-care.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('layout-Financial.dashboard')}}</span>
                        {{__('layout-Financial.save-and-care')}}</div>
                </div>
            </div>
            <div class="custom-container">
                <!-- ROW -->
						{{-- <div class="row">
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class=" text-start">
														<span class="fs-16 font-weight-semibold">د تیلو اندازه</span>
														<h5 class=" text-danger  fs-20">1254</h5>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-danger my-auto  float-end"> <i class="fa-solid fa-gas-pump"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class=" text-start">
														<span class="fs-16 font-weight-semibold">مجموعه لیست</span>
														<h5 class=" text-primary  fs-20">42</h5>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-primary float-end"> <i class="feather feather-briefcase"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class=" text-start">
														<span class="fs-16 font-weight-semibold">ناتکمیله</span>
														<h4 class=" text-secondary fs-20">11</h4>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-secondary   float-end"> <i class="feather feather-info"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<a  href="javascript:void(0);">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class=" text-start">
														<span class="fs-16 font-weight-semibold">تکمیل شوي </span>
														<h4 class=" text-success fs-20">38</h4>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-success my-auto  float-end"> <i class="feather feather-check"></i> </div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div> --}}
						<!-- END ROW -->
						
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
