@extends('financial-administrative-directorate.officers-mang.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="header mt-4">
                <a href="/officer-stuff" class="btn btn-info " onClick="javascript:window.print();"><i
                        class="si si-printer"></i> Print</a>
            </div>
            <div class="main-proifle">
                <div class="row col-md-12">
                    <img src="{{asset('storage/employee/def.png')}}" alt="sfdg">
                </div>
            </div>
           
        </div>
    </div>
@endsection
