@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/car.list-of-car') }}</div>
                </div>
                <div class="page-rightheader">
                    <div class="page-rightheader header">
                        <a href="/depo-car" class="btn btn-primary">
                            {{ __('depo/car.add-car') }} <i class="fa-solid fa-plus"></i></a>
                    </div>

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
                    <table class="table table-bordered text-center">
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
                                <th>{{ __('depo/car.trustee') }}</th>
                                <th>{{ __('depo/car.date') }}</th>
                                <th>{{ __('employee.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="/update-car" class="btn bg-success btn-sm" ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="" class="btn btn-sm bg-success" 
                                        ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="" class="btn btn-sm bg-success" 
                                        ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="" class="btn btn-sm bg-success" 
                                        ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="" class="btn btn-sm bg-success" 
                                        ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>corola</td>
                                <td>2005</td>
                                <td>2354</td>
                                <td>red</td>
                                <td>kbl12345</td>
                                <td>2</td>
                                <td>unit</td>
                                <td>122222</td>
                                <td>2333333</td>
                                <td>abdul saboor</td>
                                <td>2022-2-2</td>
                                <td>
                                    <a href="" class="btn btn-sm bg-success" 
                                        ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ----------- pagination-links ---------------- --}}
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
                    {{-- -=------------ end of pagination links ---------------- --}}
                </div>
            </div>
        </div>
    </div>
@endsection
