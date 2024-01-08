@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{ __('financial/estilam.update-estilam') }}</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{url('estate-oil-inquery/'.$contract->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{__('financial/estilam.estilam-info')}}</h4>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('financial/estilam.company')}}</label>
                                            <input type="text" value="{{$contract->company_name}}" name="company" class="form-control" placeholder="{{__('financial/estilam.company')}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{__('financial/estilam.date')}}</label>
                                            <input type="text" value="{{$contract->date}}" name="date" class="form-control"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <label class="form-label ">{{__('financial/estilam.follow-person')}}</label>
                                            <input type="text" value="{{$contract->follow_person}}" name="follow_person" class="form-control" placeholder="{{__('financial/estilam.follow-person')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-start">
                                    <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                    <a href="{{url()->previous()}}" class="btn btn-danger">{{__('depo/all-products.cancel')}}</a>
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
