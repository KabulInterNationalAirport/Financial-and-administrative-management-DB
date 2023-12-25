@extends('.layout.master')
@section('contents')
<div class="app-content main-content">
    <div class="side-app main-container">
        <!-- PAGE HEADER -->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('depo/report.daily-report')}}</span>{{__('depo/report.kabul-airport')}}</div>
            </div>
        </div>
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
                            <div class="d-xl-flex d-block">
                                <form class="form-inline">
                                    <div class="search-element">
                                        <input type="search" class="form-control header-search small" placeholder="{{__('layout-Financial.search')}}..."
                                            aria-label="Search" tabindex="1">
                                    </div>
                                    <div class="form-group ms-1 w-13">
                                        <select name="" class="form-control custom-select select2"
                                        data-placeholder="{{__('depo/report.day-month')}}">
                                        <option label="{{__('depo/report.day-month')}}"></option>
                                        <option value="1">{{__('depo/report.today')}}</option>
                                        <option value="2">{{__('depo/report.yesterday')}}</option>
                                        <option value="3">{{__('depo/report.past-week')}}</option>
                                        <option value="1">{{__('depo/report.this-month')}}</option>
                                    </select>
                                    </div>
                                    <Button class="btn btn-light small ms-1">{{__('layout-Financial.search')}}</Button>
                                </form>
                            </div>
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
                                                    <span class="badge badge-primary">نا تکمله</span>
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
                            <div>
                                <form class="form-inline">
                                    <div class="search-element">
                                        <input type="search" class="form-control header-search small" placeholder="{{__('layout-Financial.search')}}..."
                                            aria-label="Search" tabindex="1">
                                    </div>
                                    <div class="form-group ms-1 w-13">
                                        <select name="" class="form-control custom-select select2"
                                        data-placeholder="{{__('depo/report.day-month-year')}}">
                                        <option label="{{__('depo/report.day-month-year')}}"></option>
                                        <option value="1">{{__('depo/report.today')}}</option>
                                        <option value="2">{{__('depo/report.yesterday')}}</option>
                                        <option value="3">{{__('depo/report.past-week')}}</option>
                                        <option value="1">{{__('depo/report.this-month')}}</option>
                                        <option value="2">{{__('depo/report.past-month')}}</option>
                                        <option value="1">{{__('depo/report.this-year')}}</option>
                                        <option value="2">{{__('depo/report.past-year')}}</option>
                                    </select>
                                    </div>
                                    <Button class="btn btn-light small ms-1">{{__('layout-Financial.search')}}</Button>
                                </form>
                            </div>
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
                                                    <span class="badge badge-success">تکمله</span>
                                                </td>
                                                <td class="">
                                                    <a href="/print-report" class="action-btns1 bg-success"><i class="fa-solid fa-chalkboard-user"></i></a>
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
@endsection
