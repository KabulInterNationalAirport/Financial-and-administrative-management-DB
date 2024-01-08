@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-title page-leftheader">{{__('financial/contract.contract-list')}}</div>
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="{{route('estate-contract.create')}}"class="btn btn-primary " >{{__('financial/contract.add-new-contract')}}<i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                
            </div>
            <!-- END PAGE HEADER -->
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
                            @foreach ($contracts as $contract)
                            <tr>
                                <td>{{$contract->id}}</td>
                                <td>
                                    {{$contract->contract_no}}
                                </td>
                                <td>
                                    {{$contract->contract}}
                                </td>
                                <td>
                                    {{$contract->contract_reason}}   
                                </td>
                                <td>{{$contract->company}}</td>
                                <td>{{$contract->executer_num}}</td>
                                <td>{{$contract->start_date}}</td>
                                <td>{{$contract->end_date}}</td>
                                
                                <td><span class="badge badge-success">تکمیل</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{url('estate-contract/'.$contract->id)}}" class="action-btns1"  title="د قرار داد کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="{{url('estate-contract/'.$contract->id.'/edit')}}" class="action-btns1">
                                            <i class="fa-solid fa-pen  text-success" title="د قرار داد تغیر کول"></i>
                                        </a>
                                        <a href="{{url('estate-report/'.$contract->id)}}" class="action-btns1"  title="د قرار داد پرینټ"><i class="fa-solid fa-print  text-secondary"></i></a>
                                       
                                    </div>
                                </td>
                            </tr>  
                                
                            @endforeach
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
