@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            
            {{-- modal for getting money  --}}
            <div class="modal fade" id="addImage" tabindex="-1" aria-labelledby="addImage" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addImage">{{__('financial/contract.get-mony')}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="">
                                    <select name="projects"
                                        class="form-control custom-select select2"
                                        data-placeholder="Select">
                                        <option label="Select"></option>
                                        <option value="حمل">حمل</option>
                                        <option value="ثور">ثور</option>
                                        <option value="جوزا">جوزا</option>
                                        <option value="سرطان">سرطان</option>
                                        <option value="اسد">اسد</option>
                                        <option value="سنبله">سنبله</option>
                                        <option value="میزان">میزان</option>
                                        <option value="عقرب">عقرب</option>
                                        <option value="قوس">قوس</option>
                                        <option value="جدې">جدې</option>
                                        <option value="دلوه">دلوه</option>
                                        <option value="حوت">حوت</option>
                                    </select>
                                </div>
                                <div class="custom-controls-stacked d-md-flex my-3">
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
            {{-- end of the modal  --}}

            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-title">{{__('financial/commercial-areas.commercial-areas-list')}}</div>
                <div class="page-rightheader header ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <a href="{{route('estate-commircial-areas.create')}}"class="btn btn-primary " >{{__('financial/commercial-areas.add-new')}}<i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle">
                <div class="page-header">
                    <form class="form-inline ">
                        <div class="search-element">
                            <input type="search" class="form-control header-search small"
                                placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                tabindex="1">
                        </div>
                    </form>
            </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th>{{__('depo/report.id')}}</th>
                                <th>{{__('financial/commercial-areas.contract-person')}}</th>
                                <th>{{__('financial/commercial-areas.monthly-rent')}}</th>
                                <th>{{__('financial/contract.area-mm')}}</th>
                                <th>{{__('financial/contract.location')}}</th>
                                <th>{{__('financial/contract.start-date')}}</th>
                                <th>{{__('financial/contract.end-date')}}</th>
                                <th>{{__('financial/commercial-areas.activity-form')}}</th>
                                <th>{{__('financial/contract.state')}}</th>
                                <th>{{__('financial/contract.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>
                                        {{$item->contract_person}}
                                    </td>
                                    <td>
                                        {{$item->monthly_rent}}  
                                    </td>
                                    <td>
                                        {{$item->area_mm}} 
                                    </td>
                                    <td>{{$item->location}}</td>
                                    <td>{{$item->start_date}}</td>
                                    <td>{{$item->end_date}}</td>
                                    <td>{{$item->activity_form}}</td>
                                    
                                    <td><span class="badge badge-success">{{$item->state}}</span></td>
                                    <td>
                                        <div>
                                            <a href="{{url('estate-commircial-areas/'. $item->id)}}" class="action-btns1"  title="د قرار داد کتل"><i
                                                    class="fa-solid fa-eye text-primary"></i></a>
                                            <a href="{{url('estate-commircial-areas/'. $item->id.'/edit')}}" class="action-btns1" >
                                                <i class="fa-solid fa-pen  text-success" title="د قرار داد تغیر کول"></i>
                                            </a>
                                            <a href="{{url('commercial-area-rent/'.$item->id.'/edit')}}" class="action-btns1" title="د قرار داد پرینټ"><i class="fa-solid fa-print  text-secondary"></i></a>
                                            <a href="{{url('commercial-area-rent/'.$item->id)}}" class="action-btns1"  title="د کرایه ورکړه"><i class="fa-regular fa-calendar-check text-info"></i></a>
                                        
                                        </div>
                                    </td>
                                </tr>  
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="footer ">
                    <button class="btn btn-info " onClick="javascript:window.print();"><i
                            class="si si-printer"></i> {{__('depo/all-products.print')}}</button>
                </div>

                <!-- END  ROW -->
            </div>

        </div>
    </div>
@endsection
