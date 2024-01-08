@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د میاشتو د کرایې لیست</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle">
                <div class="table-responsive hr-attlist">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="hr-attendance">

                        <tr  class="bg-success" >
                            <th colspan="2">د قرارداری نوم</th>
                            <td colspan="10">
                                <h6 class=" fs-20">{{ $item->contract_person }}</h6>
                            </td>
                        </tr>
                        @foreach ($rents as $rent)
                            @if ($rent->ECommercialArea_id == $item->id)
                                <th>{{ $rent->month }} <br>
                                    @if ($rent->status == 'تکمیل')
                                        <div class=" btn btn-sm bg-light">

                                            <span class="feather feather-check-circle text-success ">Done</span>
                                        </div>
                                    @else
                                        <div class=" btn btn-sm bg-light">
                                            <span class="feather feather-x-circle text-danger">Not Done</span>
                                        </div>
                                    @endif
                                </th>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{ __('financial/contract.specifications') }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-12 col-lg-12">
                    <div class="card mt-3">
                        <div class="card-header  border-0">
                            <div class="card-title">{{ __('financial/contract.specifications') }}</div>
                        </div>
                        <div class="card-body  ps-3 pr-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('depo/report.id') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->id }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('depo/car.name') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->contract_person }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span
                                                    class="w-50">{{ __('financial/commercial-areas.contract-person') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->contract_person }} </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span
                                                    class="w-50">{{ __('financial/commercial-areas.monthly-rent') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->monthly_rent }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('financial/contract.location') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->location }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('financial/contract.area-mm') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->area_mm }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span
                                                    class="w-50">{{ __('financial/commercial-areas.activity-form') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->activity_form }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('financial/contract.start-date') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->start_date }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('financial/contract.end-date') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{ $item->end_date }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{ __('financial/contract.state') }}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span
                                                    class="font-weight-semibold badge badge-success">{{ $item->state }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-xl-9 col-md-12 col-lg-12">
                    <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="card-body" style="height: 400px">
                                    <h5 class=" font-weight-semibold mt-3 mb-3">{{ __('financial/contract.description') }}
                                    </h5>
                                    <p>{{ $item->contract_details }}</p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
