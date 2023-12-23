@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
<div class="app-content main-content">
    <div class="side-app main-container">
        <!-- PAGE HEADER -->
        <div class="page-header ">

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
                            <form>
                                <div>
                                    <label for="driver-name" class="col-form-label">{{__('financial/oil-cars.driver')}}:</label>
                                    <input type="text" class="form-control" id="driver-name" placeholder="{{__('financial/oil-cars.driver')}}">
                                </div>
                                <div>
                                    <label for="father-name" class="col-form-label">{{__('financial/oil-cars.father-name')}}:</label>
                                    <input type="text" class="form-control" id="father-name" placeholder="{{__('financial/oil-cars.father-name')}}">
                                </div>
                                <div>
                                    <label for="id-number" class="col-form-label">{{__('financial/oil-cars.id-card')}}:</label>
                                    <input type="text" class="form-control" id="id-number" placeholder="{{__('financial/oil-cars.id-card')}}">
                                </div>
                                <div>
                                    <label for="car-id-number" class="col-form-label">{{__('financial/oil-cars.car-no')}}:</label>
                                    <input type="text" class="form-control" id="car-id-number" placeholder="{{__('financial/oil-cars.car-no')}}">
                                </div>
                                <div>
                                    <label for="oil-quantity" class="col-form-label">{{__('financial/oil-cars.oil-valume')}}:</label>
                                    <input type="text" class="form-control" id="oil-quantity" placeholder="{{__('financial/oil-cars.oil-valume')}}">
                                </div>
                                <div>
                                    <label for="date" class="col-form-label">{{__('financial/oil-cars.date')}}:</label>
                                    <input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYY"
                                        id="date">
                                </div>
                                <div>
                                    <label for="org-name" class="col-form-label">{{__('financial/oil-cars.company')}}:</label>
                                    <input type="text" class="form-control" id="org-name" placeholder="{{__('financial/oil-cars.company')}}">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('depo/all-products.cancel')}}</button>
                            <button type="button" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- د ماډل پای --}}
            <div class="header">
                <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">
                    {{__('financial/oil-cars.add-new')}}<i class="fa-solid fa-plus"></i></button>
            </div>

        </div>
        <!-- END PAGE HEADER -->
        <!-- ROW -->
        <div class="main-proifle">
            <!-- ROW -->
            <div class="header text-center">
                <div class="page-title">{{__('financial/oil-cars.list-of-cars')}}</div>
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
                            <th>{{__('financial/oil-cars.date')}}</th>
                            <th>{{__('financial/oil-cars.company')}}</th>
                            <th>{{__('financial/oil-cars.actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>خان مامد</td>
                            <td>
                                ګل محمد
                            </td>
                            <td>
                                ۱۶۱۶۰۰۲
                            </td>
                            <td>
                                4545
                            </td>
                            <td>۴</td>
                            <th class="">2024/34/3</th>
                            <th class="">ارو پطرولیم</th>
                            <td>
                                <div class="">
                                    <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                        data-bs-target="#editprojectmodal">
                                        <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="تغیر کول"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
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