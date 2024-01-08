@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{ __('depo/car.update-car') }}</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{ url('estate-oil-cars/' . $car->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{ __('financial/estilam.estilam-info') }}</h4>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="driver-name"
                                                class="col-form-label">{{ __('financial/oil-cars.driver') }}:</label>
                                            <input type="text" value="{{$car->driver}}" name="driver" class="form-control" id="driver-name"
                                                placeholder="{{ __('financial/oil-cars.driver') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="father-name"
                                                class="col-form-label">{{ __('financial/oil-cars.father-name') }}:</label>
                                            <input type="text" value="{{$car->father_name}}" name="father_name" class="form-control" id="father-name"
                                                placeholder="{{ __('financial/oil-cars.father-name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="id-number"
                                                class="col-form-label">{{ __('financial/oil-cars.id-card') }}:</label>
                                            <input type="text" value="{{$car->id_card}}" name="id_card" class="form-control" id="id-number"
                                                placeholder="{{ __('financial/oil-cars.id-card') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="car-id-number"
                                                class="col-form-label">{{ __('financial/oil-cars.car-no') }}:</label>
                                            <input type="text" value="{{$car->vehicale_no}}" name="car_no" class="form-control" id="car-id-number"
                                                placeholder="{{ __('financial/oil-cars.car-no') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-start">
                                    <button type="submit"
                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                    <a href="{{ url()->previous() }}"
                                        class="btn btn-danger">{{ __('depo/all-products.cancel') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->
        </div>
    </div>
@endsection
