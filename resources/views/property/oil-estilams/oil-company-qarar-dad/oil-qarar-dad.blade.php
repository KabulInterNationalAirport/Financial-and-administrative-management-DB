@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header ">
                
               {{-- د نوي تیلو د شرکت د اضافه کولو لپاره ماډل --}}
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h1 class="modal-title fs-5" id="exampleModalLabel">د شرکت مشخصات</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                               aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <form>
                               <div>
                                   <label for="cagegory-name" class="col-form-label">د شرکت نوم:</label>
                                   <input type="text" class="form-control" id="cagegory-name">
                               </div>
                               <div>
                                   <label for="item-name" class="col-form-label">د ریئس نوم:</label>
                                   <input type="text" class="form-control" id="item-name">
                               </div>
                               <div>
                                   <label for="item-name" class="col-form-label">قرار داد شروع:</label>
                                   <input type="text" class="form-control" id="item-name">
                               </div>
                               <div>
                                <label for="item-name" class="col-form-label">قرار داد ختم:</label>
                                <input type="text" class="form-control" id="item-name">
                            </div>
                            <div>
                                <label for="item-name" class="col-form-label">آدرس  :</label>
                                <input type="text" class="form-control" id="item-name">
                            </div>
                            <div >
                                <label class="form-label">د قرار داد انځورونه :</label>
                                    <input class="form-control" multiple type="file">
                            </div>
                           </form>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند
                               کړۍ</button>
                           <button type="button" class="btn btn-primary">ذخیره کړۍ</button>
                       </div>
                   </div>
               </div>
           </div>
           {{-- د ماډل پای --}}
           <div class="page-leftheader">
               <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal"> 
                   نوی شرکت اضافه کړۍ <i class="fa-solid fa-plus"></i></button>
           </div>

            </div>
            <!-- END PAGE HEADER -->
            <!-- ROW -->
            <div class="main-proifle">
                <!-- ROW -->
                <div class="header text-center">
                    <div class="page-title">د شرکتونو لیست</div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-vcenter text-center table-bordered border-bottom" id="project-list">
                        <thead class="bg-success">
                            <tr>
                                <th class="border-bottom-0">د شرکت نوم</th>
                                <th class="border-bottom-0">د شرکت ریس</th>
                                <th class="border-bottom-0">قرار داد شروع نیټه</th>
                                <th class="border-bottom-0">قرار داد ختم نیټه</th>
                                <th class="border-bottom-0"> آدرس</th>
                                <th class="border-bottom-0">عملیې</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ارو پطرولیم
                                </td>
                                <td>خان مامد</td>
                                <td>
                                  7/9/2023
                                </td>
                                <td>
                                    7/9/2023
                                </td>
                                <td>هوايي ډ‌ګر ته څېرمه</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/view" class="action-btns1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="د قرار داد کتل"><i
                                                class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                            data-bs-target="#editprojectmodal">
                                            <i class="fa-solid fa-pen  text-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="د قرار داد تغیر کول"></i>
                                        </a>
                                        <a href="" class="action-btns1" data-bs-toggle="modal"
                                        data-bs-target="#editprojectmodal">
                                        <i class="fa-solid fa-table-list  text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title=" جزیئات "></i>
                                    </a>
                                       
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
                <div class="footer ">
                    <button class="btn btn-primary " onClick="javascript:window.print();"><i
                            class="si si-wallet"></i> Pdf </button>
                    <button class="btn btn-secondary " onClick="javascript:window.print();"><i
                            class="si si-paper-plane"></i>Excel</button>
                    <button class="btn btn-info " onClick="javascript:window.print();"><i
                            class="si si-printer"></i> Print</button>
                </div>

                <!-- END  ROW -->
            </div>

        </div>
    </div>
@endsection
