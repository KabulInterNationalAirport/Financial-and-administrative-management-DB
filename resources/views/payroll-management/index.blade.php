@extends('payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">دشبورډ</span>
                        د معاشاتو عمومي مدیریت</div>
                </div>
            </div>
            <div class="custom-container">
                <!-- ROW -->
						<div class="row">
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
						</div>
						<!-- END ROW -->
            </div>

        </div>
    </div>
    </div>
@endsection
