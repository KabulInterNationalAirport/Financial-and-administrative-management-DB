@extends('financial-administrative-directorate.officers-mang.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="tab-menu-heading hremp-tabs p-0 ">
                                <div class="tabs-menu1">
                                    <ul class="nav panel-tabs">
                                        <li class="ms-4"><a href="#tab5" class="active"
                                                data-bs-toggle="tab">{{ __('employee.balance') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="table-responsive cod-md-6">
                                    <table class="table  table-vcenter text-center table-bordered border-bottom"
                                        id="hr-table">

                                        <tbody>

                                            <tr class="bg-success">
                                                <th>بیلانس نوم</th>
                                                <td>{{ $idd->balance_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>مکملي ورځي</th>
                                                <td>
                                                    {{ $idd->total_days }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>پاتي ورځي</th>
                                                <td>
                                                    {{ $idd->remain_days }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>مصرف شوې ورځي</th>
                                                <td>
                                                    {{ $idd->used_days }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <form action="{{ url('balance/'.$idd->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{ __('employee.balance') }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="number" name="balance"
                                                                class="form-control mb-md-0 mb-5"
                                                                placeholder="{{ __('employee.balance') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                                    <a href="{{url()->previous()}}"
                                                        class="btn btn-danger">{{ __('depo/all-products.cancel') }}</a>
                                                </div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div><!-- end app-content-->
        </div>
    </div>
@endsection
