@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{__('financial/contract.specifications')}}</div>
                </div>
            </div>
            <!-- ROW -->
            <div class="row">
                <div class="col-xl-3 col-md-12 col-lg-12">
                    <div class="card mt-3">
                        <div class="card-header  border-0">
                            <div class="card-title">{{__('financial/contract.specifications')}}</div>
                        </div>
                        <div class="card-body  ps-3 pr-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.contract-no')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->contract_no}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.contract')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->contract}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.contract-reason')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->contract_reason}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.location')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->location}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.area-mm')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->area_mm}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.company')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->company}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.executer-num')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->executer_num}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.start-date')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->start_date}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.end-date')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold">{{$contract->end_date}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="w-50">{{__('financial/contract.state')}}</span>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <span class="font-weight-semibold badge badge-success">{{$contract->state}}</span>
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
                                <div class="card-body" style="height: 600px">
                                    <h5 class=" font-weight-semibold mt-3 mb-3">{{__('financial/contract.description')}}</h5>
                                    <p>{{$contract->contract_details}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
