@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"> {{__('depo/report.daily-report')}}</span>
                        {{__('layout-Financial.depot-management')}}</div>
                </div>
                <div class="page-rightheader ms-md-auto header">
                    <button class="btn btn-info" onClick="" data-bs-target="#addNewtask" data-bs-toggle="modal"><i
                            class="fa-solid fa-plus"></i>
                            {{__('depo/report.add-new-task')}}</button>
                </div>
            </div>
            {{-- modal for adding new task to the list --}}
            <div class="modal fade" id="addNewtask" tabindex="-1" aria-labelledby="addNewtaskLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addNewtaskLabel">{{__('depo/report.add-new-task')}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div>
                                    <label for="position-name" class="col-form-label">{{__('depo/report.office')}}:</label>
                                    <select name="" class="form-control custom-select select2"
                                        data-placeholder="{{__('depo/report.office')}}">
                                        <option value="{{__('layout-Financial.depot-management')}}">{{__('layout-Financial.depot-management')}}</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="task-name" class="col-form-label">{{__('depo/report.task')}}:</label>
                                    <input type="text" class="form-control" id="task-name" placeholder="{{__('depo/report.task')}}">
                                </div>
                                <div>
                                    <label for="details" class="col-form-label">{{__('depo/report.task-details')}}:</label>
                                    <textarea name="details" class="form-control" id="details" cols="" rows="" placeholder="{{__('depo/report.task-details')}}"></textarea>
                                </div>
                                <div class="custom-controls-stacked d-md-flex mt-3">
                                    <label class="form-label me-5">{{__('depo/report.state')}}:</label>
                                    <label class="custom-control custom-radio success me-4">
                                        <input type="radio" class="custom-control-input" name="example-radios1"
                                            value="option1">
                                        <span class="custom-control-label">{{__('depo/report.complete')}}</span>
                                    </label>
                                    <label class="custom-control custom-radio success">
                                        <input type="radio" class="custom-control-input" name="example-radios1"
                                            value="option3">
                                        <span class="custom-control-label">{{__('depo/report.new')}}</span>
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('depo/all-products.cancel')}}</button>
                                    <button type="button" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of the modal for adding new task --}}

            {{-- modal for editing task and adding image to a task --}}
            <div class="modal fade" id="addImage" tabindex="-1" aria-labelledby="addImage" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addImage">{{__('depo/report.update-task')}} </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div>
                                    <label for="details" class="col-form-label">{{__('depo/report.related-images')}}:</label>
                                    <input type="file" src="" class="form-control" alt="" multiple>
                                </div>
                                <div class="custom-controls-stacked d-md-flex mt-3">
                                    <label class="form-label me-5">{{__('depo/report.state')}}:</label>
                                    <label class="custom-control custom-radio success me-4">
                                        <input type="radio" class="custom-control-input" name="example-radios1"
                                            value="option1">
                                        <span class="custom-control-label">{{__('depo/report.complete')}}</span>
                                    </label>
                                    <label class="custom-control custom-radio success">
                                        <input type="radio" class="custom-control-input" name="example-radios1"
                                            value="option3">
                                        <span class="custom-control-label">{{__('depo/report.new')}}</span>
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('depo/all-products.cancel')}}</button>
                                    <button type="button" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of the modal editing --}}
        </div>
        <!-- ROW -->
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="tab-menu-heading hremp-tabs p-0 ">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">{{__('depo/report.uncompleted-tasks')}}</a></li>
                            <li><a href="#tab6"  data-bs-toggle="tab">{{__('depo/report.completed-tasks')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab5">
                            <div class="card-header">
                                <h1>{{__('depo/report.uncompleted-tasks')}}</h1>
                            </div>
                            <div class="card-body">
                                <div class="mt-3">
                                    <div class="table-responsive">
                                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                                            <thead>
                                                <tr>
                                                    <th>{{__('depo/report.id')}}</th>
                                                    <th>{{__('depo/report.office')}}</th>
                                                    <th class="w-15">{{__('depo/report.task')}}</th>
                                                    <th class="w-45">{{__('depo/report.task-details')}}</th>
                                                    <th>{{__('depo/report.date')}}</th>
                                                    <th>{{__('depo/report.state')}}</th>
                                                    <th>{{__('depo/report.actions')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>جنس توزیع</td>
                                                    <td>آمریتونو ډیتابیس</td>
                                                    <td>زه نن ډېر ستړی یم زه نه شم کولای چې درس ته درشم اوس مصروفه یم تاسي ولاړ شي زه به
                                                        ستا سو له شا درشم تاسي په ارامه سره خپل کارونه وکړي</td>
                                                    <th>1304/34/34</th>
                                                    <td>
                                                        <span class="badge badge-primary">نا تکمله</span>
                                                    </td>
                                                    <td class="">
                                                        <Button class="action-btns1 bg-success" data-bs-target="#addImage"
                                                            data-bs-toggle="modal"><i class="fa-solid fa-square-check"></i></Button>
                                                    </td>
                                                </tr>
                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END ROW -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="card-header">
                                <h1>{{__('depo/report.completed-tasks')}}</h1>
                            </div>
                            <div class="card-body">
                                <div class="mt-3">
                                    <div class="table-responsive">
                                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                                            <thead>
                                                <tr>
                                                    <th>{{__('depo/report.id')}}</th>
                                                    <th>{{__('depo/report.office')}}</th>
                                                    <th class="w-15">{{__('depo/report.task')}}</th>
                                                    <th class="w-45">{{__('depo/report.task-details')}}</th>
                                                    <th>{{__('depo/report.date')}}</th>
                                                    <th>{{__('depo/report.state')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>جنس توزیع</td>
                                                    <td>آمریتونو ډیتابیس</td>
                                                    <td>زه نن ډېر ستړی یم زه نه شم کولای چې درس ته درشم اوس مصروفه یم تاسي ولاړ شي زه به
                                                        ستا سو له شا درشم تاسي په ارامه سره خپل کارونه وکړي</td>
                                                    <th>1304/34/34</th>
                                                    <td>
                                                        <span class="badge badge-success">تکمله</span>
                                                    </td>
                                                </tr>
                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END ROW -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a  href="" class="btn btn-primary">{{__('depo/all-products.print')}} <i class="fa-solid fa-print"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ROW -->
    </div>
    </div>
@endsection
