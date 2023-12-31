@extends('financial-administrative-directorate.logistics.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{ url('logistic-report/' . $report->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{ __('depo/report.update-report') }}</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="position-name"
                                                class="col-form-label">{{ __('depo/report.office') }}:</label>
                                            <select name="office" class="form-control custom-select select2"
                                                data-placeholder="{{ __('depo/report.office') }}">
                                                <option value="مدیریت تدارکات">
                                                    {{ __('layout-Financial.logistic') }}</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="task-name"
                                                class="col-form-label">{{ __('depo/report.task') }}:</label>
                                            <input type="text" class="form-control" id="task-name"
                                                value="{{ $report->task }}" name="task"
                                                placeholder="{{ __('depo/report.task') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="details"
                                                class="col-form-label">{{ __('depo/report.related-images') }}:</label>
                                            <input type="file" src="" name="image" class="form-control"
                                                alt="" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="details"
                                                class="col-form-label">{{ __('depo/report.task-details') }}:</label>
                                            <textarea name="taskdetails" class="form-control" aria-valuetext="" id="details" cols="" rows=""
                                                placeholder="{{ __('depo/report.task-details') }}">{{ $report->task_details }}</textarea>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-controls-stacked d-md-flex mt-3">
                                                <label class="form-label me-5">{{ __('depo/report.state') }}:</label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="state"
                                                        value="تکمیل">
                                                    <span
                                                        class="custom-control-label">{{ __('depo/report.complete') }}</span>
                                                </label>
                                                <label class="custom-control custom-radio success">
                                                    <input type="radio" class="custom-control-input" name="state"
                                                        value="نو">
                                                    <span class="custom-control-label">{{ __('depo/report.new') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="cancel"
                                        class="btn btn-secondary">{{ __('depo/all-products.cancel') }}</button>
                                    <button type="submit"
                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
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
