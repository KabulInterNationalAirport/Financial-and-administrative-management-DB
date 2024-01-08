@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('layout-Financial.distributed-car-commodities') }}</div>
                </div>
            </div>
            <div class="">
                <div class="main-proifle">
                    <div class="card-header border-bottom-0">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small"
                                        placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                        tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto ">
                            <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                    class="si si-printer"></i> {{ __('depo/all-products.print') }}</button>
                        </div>
                    </div>
                    <table class="table table-bordered text-center ">
                        <thead class="bg-info">
                            <tr>
                                <th>{{ __('depo/car.id') }}</th>
                                <th>{{ __('depo/car.name') }}</th>
                                <th>{{ __('depo/car.model') }}</th>
                                <th>{{ __('depo/car.engine-no') }}</th>
                                <th>{{ __('depo/car.color') }}</th>
                                <th>{{ __('depo/car.no-palat') }}</th>
                                <th>{{ __('depo/car.quantity') }}</th>
                                <th>{{ __('depo/car.unit') }}</th>
                                <th>{{ __('depo/car.price') }}</th>
                                <th>{{ __('depo/car.total-price') }}</th>
                                <th>{{ __('depo/delivered-products.based-on') }}</th>
                                <th>{{ __('depo/delivered-products.number') }}</th>
                                <th>{{ __('employee.related-office') }}</th>
                                <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                <th>{{ __('depo/delivered-products.receiver') }}</th>
                                {{-- <th>{{ __('employee.actions') }}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <th scope="row">{{ $car->id }}</th>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->engine_no }}</td>
                                    <td>{{ $car->color }}</td>
                                    <td>{{ $car->no_palet }}</td>
                                    <td>{{ $car->quantity }}</td>
                                    <td>{{ $car->unit }}</td>
                                    <td>{{ $car->price }}</td>
                                    <td>{{ $car->price * $car->quantity }}</td>
                                    <td>{{ $car->based_on }}</td>
                                    <td>{{ $car->number }}</td>
                                    <td>{{ $car->order_office }}</td>
                                    <td>{{ $car->order_date }}</td>
                                    <td>{{ $car->delivered_date }}</td>
                                    <td>{{ $car->cam_org_stuff_id }}</td>
                                    {{-- <td>
                                        <a class="btn btn-outline-primary  btn-sm" href="/uuu">
                                            {{ __('depo/employees.edit') }}
                                        </a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- ----------- pagination links here-------- --}}
                    <div class="card-body footer">
                        <ul class="pagination mg-b-0 page-0 ">
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-left"></i></a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link hidden-xs-down" href="javascript:void(0);">4</a>
                            </li>

                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
