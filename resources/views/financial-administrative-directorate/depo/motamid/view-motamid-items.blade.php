@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
						<div class="row">
							<div class="col-md-12">
								<div class="main-proifle">
									<div class="card-body">
										<div class="invoice-header text-end d-block mb-5">
											<h1 class="invoice-title font-weight-semibold text-uppercase text-center mb-1">{{__('depo/motamid.registered-products-to-trustee')}}</h1>
										</div>
										<div class="row mt-4">
											<div class="col-md">
                                                <h4>{{ __('depo/motamid.trustee-information') }}</h4>
                                                <h5>{{ __('depo/delivered-products.name') }}: {{$trustee->name}}</h5>
                                                <h5> {{ __('depo/employees.mobile') }}: {{$trustee->phone}}</h5>
                                                <h5>{{ __('depo/employees.email') }}: {{$trustee->email}}</h5>
                                                <h5>{{ __('depo/employees.id-card') }}: {{$trustee->id_card}}</h5>
                                            </div>
										</div>
                                            <div class="table-responsive mt-4">
                                                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('depo/delivered-products.id') }}</th>
                                                            <th>{{ __('depo/delivered-products.category') }}</th>
                                                            <th>{{ __('depo/delivered-products.name') }}</th>
                                                            <th>{{ __('depo/delivered-products.quantity') }}</th>
                                                            <th>{{ __('depo/delivered-products.unit') }}</th>
                                                            <th>{{ __('depo/delivered-products.price') }}</th>
                                                            <th>{{ __('depo/delivered-products.total-price') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($items as $item)
                                                            @if ($item->trustee_id == 1)
                                                            <tr>
                                                                <th scope="row">{{$item->id}}</th>
                                                                <td>{{$item->category}}</td>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->quantity}}</td>
                                                                <td>{{$item->unit}}</td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->price * $item->quantity}}</td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
										<div class="float-end footer">
											<button  class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> {{__('depo/all-products.print')}}</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
        </div>
    </div>

        @endsection