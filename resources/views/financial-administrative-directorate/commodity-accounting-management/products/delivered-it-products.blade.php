@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('layout-Financial.tech') }}</div>
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
                    <table class="table table-bordered text-center mt-4">
                        <thead class="bg-info">
                            <tr>
                                <th>{{ __('depo/new-arrivals.id') }}</th>
                                <th>{{ __('depo/new-arrivals.category') }}</th>
                                <th>{{ __('depo/new-arrivals.name') }}</th>
                                <th>{{ __('depo/new-arrivals.serial-no') }}</th>
                                <th>{{ __('depo/new-arrivals.ram') }}</th>
                                <th>{{ __('depo/new-arrivals.hd') }}</th>
                                <th>{{ __('depo/new-arrivals.color') }}</th>
                                <th>{{ __('depo/new-arrivals.quantity') }}</th>
                                <th>{{ __('depo/new-arrivals.unit') }}</th>
                                <th>{{ __('depo/new-arrivals.price') }}</th>
                                <th>{{ __('depo/new-arrivals.total-price') }}</th>
                                <th>{{ __('depo/delivered-products.based-on') }}</th>
                                <th>{{ __('depo/delivered-products.number') }}</th>
                                <th>{{ __('employee.related-office') }}</th>
                                <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                <th>{{ __('employee.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($it_items as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->category}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->serial_no}}</td>
                                <td>{{$item->ram}}</td>
                                <td>{{$item->hd}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->unit}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->price * $item->quantity}}</td>
                                <td>{{$item->based_on}}</td>
                                <td>{{$item->number}}</td>
                                <td>{{$item->order_office}}</td>
                                <td>{{$item->order_date}}</td>
                                <td>{{$item->delivered_date}}</td>
                                <td>
                                    <a class="btn btn-outline-primary  btn-sm" href="/uuu">
                                        {{ __('depo/employees.edit') }}
                                    </a>
                                </td>
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
