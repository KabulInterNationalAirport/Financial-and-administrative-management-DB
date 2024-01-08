@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
<div class="app-content main-content">
    <div class="side-app main-container">
        <!-- PAGE HEADER -->
            {{-- د نوي تیلو د شرکت د اضافه کولو لپاره ماډل --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('financial/contract.contract-details')}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('estate-oil-cars.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="driver-name" class="col-form-label">{{__('financial/oil-cars.driver')}}:</label>
                                    <input type="text" name="driver" class="form-control" id="driver-name" placeholder="{{__('financial/oil-cars.driver')}}">
                                </div>
                                <div>
                                    <label for="father-name" class="col-form-label">{{__('financial/oil-cars.father-name')}}:</label>
                                    <input type="text" name="father_name" class="form-control" id="father-name" placeholder="{{__('financial/oil-cars.father-name')}}">
                                </div>
                                <div>
                                    <label for="id-number" class="col-form-label">{{__('financial/oil-cars.id-card')}}:</label>
                                    <input type="text" name="id_card" class="form-control" id="id-number" placeholder="{{__('financial/oil-cars.id-card')}}">
                                </div>
                                <div>
                                    <label for="car-id-number" class="col-form-label">{{__('financial/oil-cars.car-no')}}:</label>
                                    <input type="text" name="car_no" class="form-control" id="car-id-number" placeholder="{{__('financial/oil-cars.car-no')}}">
                                </div>
                                <div>
                                    <label for="oil-quantity" class="col-form-label">{{__('financial/oil-cars.oil-valume')}}:</label>
                                    <input type="text" name="oil_valume" class="form-control" id="oil-quantity" placeholder="{{__('financial/oil-cars.oil-valume')}}">
                                </div>
                                <div>
                                    <label for="date" class="col-form-label">{{__('financial/oil-cars.company')}}:</label>
                                    <select class="form-control" name="company" id="">
                                        @foreach ($companies as $company)
                                            <option class="form-control" value="{{$company->id}}">{{$company->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="date" class="col-form-label">{{__('financial/estilam.estilam-info')}}:</label>
                                    <select class="form-control" name="inquery" id="">
                                        @foreach ($inqueries as $inquery)
                                            <option class="form-control" value="{{$inquery->id}}">{{$inquery->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('depo/all-products.cancel')}}</button>
                                    <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- د ماډل پای --}}
            <div class="page-header d-xl-flex d-block">
                <div class="page-title">{{__('financial/oil-cars.list-of-cars')}}</div>
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">
                            {{__('financial/oil-cars.add-new')}}<i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        <!-- END PAGE HEADER -->
        <!-- ROW -->
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
                            <th>{{__('financial/oil-cars.id')}}</th>
                            <th>{{__('financial/oil-cars.driver')}}</th>
                            <th>{{__('financial/oil-cars.father-name')}}</th>
                            <th>{{__('financial/oil-cars.id-card')}}</th>
                            <th>{{__('financial/oil-cars.car-no')}}</th>
                            <th>{{__('financial/oil-cars.oil-valume')}}</th>
                            <th>{{__('financial/oil-cars.company')}}</th>
                            <th>{{__('financial/oil-cars.actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>
                                    {{$car->id}}
                                </td>
                                <td>{{$car->driver}}</td>
                                <td>
                                    {{$car->father_name}} 
                                </td>
                                <td>
                                    {{$car->id_card}}
                                </td>
                                <td>
                                    {{$car->vehicale_no}}
                                </td>
                                <td>{{$car->oil_total_valume}}</td>
                                <th>{{$car->estate_oil_inquiries_id}}</th>
                                <td>
                                    <div class="">
                                        <a href="{{url('estate-oil-cars/'.$car->id.'/edit')}}" class="action-btns1" >
                                            <i class="fa-solid fa-pen  text-success" title="تغیر کول"></i>
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
                    {{__('depo/all-products.print')}}</button>
            </div>

            <!-- END  ROW -->
        </div>

    </div>
</div>
@endsection