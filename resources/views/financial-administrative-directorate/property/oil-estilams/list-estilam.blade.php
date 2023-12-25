@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="/add-estilam"class="btn btn-primary " >{{__('financial/estilam.add-new')}}<i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="page-title text-center mb-4">
                    <div class="page-title">{{__('financial/estilam.estilam-list')}}</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th>{{__('financial/estilam.date')}}</th>
                                <th>{{__('financial/estilam.company')}}</th>
                                <th>{{__('financial/estilam.no-of-cars')}}</th>
                                <th>{{__('financial/estilam.oil-valume')}}</th>
                                <th>{{__('financial/estilam.follow-person')}}</th>
                                <th>{{__('financial/estilam.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12-02-2021</td>
                                <td>
                                    ارو پطرولیم
                                </td>
                                <td>
                                  7
                                </td>
                                <td>
                                10 ton
                                </td>
                                <td>احمد</td>
                                <td>
                                    <div class="">
                                        <a href="/estilam-details" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د استلام کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="/estilam-update" class="action-btns1" >
                                            <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د استلام تغیر کول"></i>
                                        </a>
                                        <a href="/view-estilam" class="action-btns1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="د استلام پرینټ"><i
                                            class="fa-solid fa-print  text-secondary"></i></a>
                                       
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