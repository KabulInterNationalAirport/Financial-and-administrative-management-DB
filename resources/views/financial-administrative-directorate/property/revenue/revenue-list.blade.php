@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="/add-revenue"class="btn btn-primary " >{{__('financial/commercial-areas.add-new')}}<i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="header text-center">
                    <div class="page-title">{{__('financial/commercial-areas.commercial-areas-list')}}</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th>{{__('depo/report.id')}}</th>
                                <th>{{__('financial/commercial-areas.contract-person')}}</th>
                                <th>{{__('financial/commercial-areas.monthly-rent')}}</th>
                                <th>{{__('financial/contract.area-mm')}}</th>
                                <th>{{__('financial/contract.location')}}</th>
                                <th>{{__('financial/contract.start-date')}}</th>
                                <th>{{__('financial/contract.end-date')}}</th>
                                <th>{{__('financial/commercial-areas.activity-form')}}</th>
                                <th>{{__('financial/contract.state')}}</th>
                                <th>{{__('financial/contract.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    عبدالصبور همت
                                </td>
                                <td>
                                   12000  
                                </td>
                                <td>
                                    ۲۲۰ 
                                </td>
                                <td>هوايي میدان ته څیرمه</td>
                                <td>12-02-2021</td>
                                <td>12-02-2021</td>
                                <td>آمریت دفتر</td>
                                
                                <td><span class="badge badge-success">تکمیل</span></td>
                                <td>
                                    <div>
                                        <a href="/view-qarardad-details" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د قرار داد کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د قرار داد تغیر کول"></i>
                                        </a>
                                        <a href="/print-revenue" class="action-btns1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="د قرار داد پرینټ"><i class="fa-solid fa-print  text-secondary"></i></a>
                                       
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
                <div class="footer ">
                    <button class="btn btn-info " onClick="javascript:window.print();"><i
                            class="si si-printer"></i> {{__('depo/all-products.print')}}</button>
                </div>

                <!-- END  ROW -->
            </div>

        </div>
    </div>
@endsection
