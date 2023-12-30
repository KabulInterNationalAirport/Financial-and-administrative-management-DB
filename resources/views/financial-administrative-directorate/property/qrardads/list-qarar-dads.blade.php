@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-title page-leftheader">{{__('financial/contract.contract-list')}}</div>
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="/new-qarardads"class="btn btn-primary " >{{__('financial/contract.add-new-contract')}}<i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                
            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="page-header">
                        <form class="form-inline ">
                            <div class="search-element">
                                <input type="search" class="form-control header-search small"
                                    placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                    tabindex="1">
                            </div>
                        </form>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th>{{__('financial/contract.id')}}</th>
                                <th>{{__('financial/contract.contract-no')}}</th>
                                <th>{{__('financial/contract.contract')}}</th>
                                <th>{{__('financial/contract.contract-reason')}}</th>
                                <th>{{__('financial/contract.company')}}</th>
                                <th>{{__('financial/contract.executer-num')}}</th>
                                <th>{{__('financial/contract.start-date')}}</th>
                                <th>{{__('financial/contract.end-date')}}</th>
                                <th>{{__('financial/contract.state')}}</th>
                                <th>{{__('financial/contract.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    6
                                </td>
                                <td>
                                   د لابراتوار جوړول
                                </td>
                                <td>
                                    د کرونا ټیسټ 
                                </td>
                                <td>بیوتیک ۱ طبی لابراتوار</td>
                                <td>۰۷۹۰۱۶۱۶۰۰</td>
                                <td>12-02-2021</td>
                                <td>12-02-2021</td>
                                
                                <td><span class="badge badge-success">تکمیل</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/view-qarardad-details" class="action-btns1"  title="د قرار داد کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="/update-qarardad" class="action-btns1">
                                            <i class="fa-solid fa-pen  text-success" title="د قرار داد تغیر کول"></i>
                                        </a>
                                        <a href="/view-qarardad" class="action-btns1"  title="د قرار داد پرینټ"><i class="fa-solid fa-print  text-secondary"></i></a>
                                       
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
                <div class="footer d-flex flex-end">
                    <button class="btn btn-info " onClick="javascript:window.print();"><i
                            class="si si-printer"></i> {{__('depo/all-products.print')}}</button>
                </div>

                <!-- END  ROW -->
            </div>

        </div>
    </div>
@endsection
