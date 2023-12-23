@extends('.layout.master')
@section('contents')
<div class="app-content main-content">
    <div class="side-app main-container">
        <!-- PAGE HEADER -->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">ورځنی ریپورټ
                        د</span>
                     مالي او اداري آمریت</div>
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
                        <li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">نا تکمیله کارونه</a></li>
                        <li><a href="#tab6"  data-bs-toggle="tab">تکمیله کارونه</a></li>
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
                                        <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                            aria-label="Search" tabindex="1">
                                    </div>
                                    <div class="form-group ms-1 w-13">
                                        <select name="" class="form-control custom-select select2"
                                        data-placeholder="ورځ-میاشت">
                                        <option label="ورځ-هفته"></option>
                                        <option value="1">نن ورځ</option>
                                        <option value="2">تېره ورځ</option>
                                        <option value="3">تېره اونۍ</option>
                                        <option value="1">روانه میاشت</option>
                                    </select>
                                    </div>
                                    <Button class="btn btn-light small ms-1">وپلټۍ</Button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                                        <thead>
                                            <tr>
                                                <th>نمبر</th>
                                                <th>مدیریت/آمریت</th>
                                                <th class="w-15">کار</th>
                                                <th class="w-45">جزیئات</th>
                                                <th>تاریخ</th>
                                                <th>حالت</th>
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
                                        <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                            aria-label="Search" tabindex="1">
                                    </div>
                                    <div class="form-group ms-1 w-13">
                                        <select name="" class="form-control custom-select select2"
                                        data-placeholder="ورځ-میاشت-کال">
                                        <option label="ورځ-هفته"></option>
                                        <option value="1">نن ورځ</option>
                                        <option value="2">تېره ورځ</option>
                                        <option value="3">تېره اونۍ</option>
                                        <option value="1">روانه میاشت</option>
                                        <option value="2">تېره میاشت</option>
                                        <option value="1">روان کال</option>
                                        <option value="2">تیر کال</option>
                                    </select>
                                    </div>
                                    <Button class="btn btn-light small ms-1">وپلټۍ</Button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                                        <thead>
                                            <tr>
                                                <th>نمبر</th>
                                                <th>مدیریت/آمریت</th>
                                                <th class="w-15">کار</th>
                                                <th class="w-45">جزیئات</th>
                                                <th>تاریخ</th>
                                                <th>حالت</th>
                                                <th>عملیې</th>
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
                        <a  href="" class="btn btn-primary">Print <i class="fa-solid fa-print"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->
</div>
@endsection
