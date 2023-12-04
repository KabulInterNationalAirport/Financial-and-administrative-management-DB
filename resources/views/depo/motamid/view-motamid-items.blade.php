@extends('depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
						<div class="row">
							<div class="col-md-12">
								<div class="main-proifle">
									<div class="card-body">
										<div class="invoice-header text-end d-block mb-5">
											<h1 class="invoice-title font-weight-semibold text-uppercase text-center mb-1">د معتمد د اجناسو لیست</h1>
										</div><!-- invoice-header -->
										<div class="row mt-4">
											<div class="col-md">
												<h4>د معتمد معلومات</h4>
                                                <h5>نوم:   Abdul Saboor hemat</h5>
                                                <h5>مبایل نمبر:  0790161600</h5>
                                                <h5>ایمیل ادرس:  saboorhemat@gmail.com</h5>
                                                <h5>آی ډي کارټ نمبر:  123456</h5>
											</div>
										</div>
                                            <div class="table-responsive mt-4">
                                                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>کټګوري</th>
                                                            <th>نوم</th>
                                                            <th>تعداد</th>
                                                            <th>واحد</th>
                                                            <th>قیمت</th>
                                                            <th>مجموعه</th>
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
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
										<div class="float-end mb-4">
											<button  class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pdf </button>
											<button  class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-paper-plane"></i>Excel</button>
											<button  class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
        </div>
    </div>

        @endsection