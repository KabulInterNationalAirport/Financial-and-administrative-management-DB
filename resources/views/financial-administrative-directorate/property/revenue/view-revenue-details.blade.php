@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د میاشتو د کرایې لیست</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle">
                <div class="table-responsive hr-attlist">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="hr-attendance">
                        <thead>
                            <tr>
                                <th>د قرارداری نوم</th>
                                <th>حمل</th>
                                <th>ثور</th>
                                <th>جوزا</th>
                                <th>سرطان</th>
                                <th>اسد</th>
                                <th>سنبله</th>
                                <th>میزان</th>
                                <th>عقرب</th>
                                <th>قوس</th>
                                <th>جدې</th>
                                <th>دلو</th>
                                <th>حوت</th>
                                <th>مجموعه</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class=" fs-20">عبدالصبور همت</h6>

                                </td>

                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <span class="feather feather-check-circle text-success "></span>
                                </td>
                                <td>
                                    <h6>
                                        <span class="text-primary">11</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span>12</span>
                                    </h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{__('financial/contract.specifications')}}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-12 col-lg-12">
                    <div class="card mt-3">
                        <div class="card-header  border-0">
                            <div class="card-title">{{__('financial/contract.specifications')}}</div>
                        </div>
                        <div class="card-body  ps-3 pr-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('depo/report.id')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">6</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/commercial-areas.contract-person')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">saboor </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/commercial-areas.monthly-rent')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">34567</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.location')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">بین المللی ترمینل غرب طرق</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.area-mm')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">۲۲۰ متره مربع</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/commercial-areas.activity-form')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">بیوتیک  </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.start-date')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">16-06-2021</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.end-date')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">16-06-2021</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.state')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold badge badge-success">تکمیل</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-xl-9 col-md-12 col-lg-12">
                    <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="card-body" style="height: 400px">
                                    <h5 class=" font-weight-semibold mt-3 mb-3">{{__('financial/contract.description')}}</h5>
                                    <p>At vero eos the moment, so blinded by and equal blame belongs to those who fail in
                                        their duty through weakness et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                    <p>On the other hand, we denounce with Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit righteous indignation and dislike men who are so beguiled and
                                        demoraliz the charms of pleasure of the moment, so blinded by and equal blame
                                        belongs to those who fail in their duty through weakness of will, which is the same
                                        as saying through shrinking from toil and pain.</p>
                                    <p>On the other hand, we denounce with Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit righteous indignation and dislike men who are so beguiled and
                                        demoraliz the charms of pleasure of the moment, so blinded by and equal blame
                                        belongs to those who fail in their duty through weakness of will, which is the same
                                        as saying through shrinking from toil and pain.</p>
                                    <p>On the other hand, we denounce with Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit righteous indignation and dislike men who are so
                                        beguiled and demoraliz the charms of pleasure of the moment, so blinded by and equal
                                        blame belongs to those who fail in their duty through weakness of will, which is the
                                        same as saying through shrinking from toil and pain.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
