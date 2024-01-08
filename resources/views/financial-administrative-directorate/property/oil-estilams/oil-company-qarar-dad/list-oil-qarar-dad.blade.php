@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
                {{-- د نوي تیلو د شرکت د اضافه کولو لپاره ماډل --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    {{ __('financial/oil-company.company-details') }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('estate-oil-storage.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label for="cagegory-name"
                                            class="col-form-label">{{ __('financial/oil-company.company-name') }}:</label>
                                        <input type="text" name="company_name" class="form-control" id="cagegory-name">
                                    </div>
                                    <div>
                                        <label for="area"
                                            class="col-form-label">{{ __('financial/oil-company.area-mm') }}:</label>
                                        <input type="text" name="area_mm" class="form-control" id="area">
                                    </div>
                                    <div>
                                        <label for="start-date"
                                            class="col-form-label">{{ __('financial/contract.start-date') }}:</label>
                                        <input type="text" name="start_date" class="form-control" id="start-date">
                                    </div>
                                    <div>
                                        <label for="end-date"
                                            class="col-form-label">{{ __('financial/contract.end-date') }}:</label>
                                        <input type="text" name="end_date" class="form-control" id="end-date">
                                    </div>

                                    <div>
                                        <label for="address"
                                            class="col-form-label">{{ __('financial/oil-company.location') }}:</label>
                                        <input type="text" name="location" class="form-control" id="address">
                                    </div>
                                    <div>
                                        <label class="form-label">{{ __('financial/contract.contract-images') }}:</label>
                                        <input class="form-control" name="image" multiple type="file">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary">{{ __('depo/all-products.cancel') }}</a>
                                        <button type="submit" class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- د ماډل پای --}}
                <div class="page-header d-xl-flex d-block">
                    <div class="page-title">{{ __('financial/oil-company.list-of-companies') }}</div>
                    <div class="page-rightheader header ms-md-auto">
                        <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                            <button class="btn btn-primary" data-bs-target="#exampleModal"
                                data-bs-toggle="modal">{{ __('financial/oil-company.add-new-company') }}<i
                                    class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER -->
                <div class="main-proifle">
                    <div class="page-header">
                        <form class="form-inline">
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
                                    <th>{{ __('financial/oil-company.id') }}</th>
                                    <th>{{ __('financial/oil-company.company-name') }}</th>
                                    <th>{{ __('financial/oil-company.area-mm') }}</th>
                                    <th>{{ __('financial/oil-company.location') }}</th>
                                    <th>{{ __('financial/contract.start-date') }}</th>
                                    <th>{{ __('financial/contract.end-date') }}</th>
                                    <th>{{ __('financial/oil-company.total-valume') }}</th>
                                    <th>{{ __('financial/oil-company.remain-valume') }}</th>
                                    <th>{{ __('depo/report.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                        <tr>
                                            <th>{{$item->id}}</th>
                                            <th>{{$item->company_name}}</th>
                                            <td>
                                                {{$item->area_mm}} 
                                            </td>
                                            <td>{{$item->location}}</td>
                                            <td>
                                                {{$item->start_date}}
                                            </td>
                                            <td>
                                                {{$item->end_date}}
                                            </td>
                                            <td>{{$item->oil_total_valume}}</td>
                                            <th>{{$item->oil_remain_valume}}</th>
                                            <td>
                                                <div class="">
                                                    {{-- <a href="" class="action-btns1" >
                                                        <i class="fa-solid fa-pen  text-success"  title="د قرار داد تغیر کول"></i>
                                                    </a> --}}
                                                    <a href="{{url('estate-oil-storage/'.$item->id)}}" class="action-btns1" >
                                                        <i class="fa-solid fa-print  text-secondary" title="{{__('depo/all-products.print')}}"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="footer ">
                        <button class="btn btn-info " onClick="javascript:window.print();"><i class="si si-printer"></i>
                            {{ __('depo/all-products.print') }}</button>
                    </div>

                    <!-- END  ROW -->
                </div>

            </div>
        </div>
    @endsection
