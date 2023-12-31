@extends('financial-administrative-directorate.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="header mt-4">
                <button class="btn btn-info " onClick="javascript:window.print();"><i
                        class="si si-printer"></i> Print</button>
            </div>
            <div class="main-proifle">
                <div class="row col-md-12">
                    <img src="{{asset('storage\employee-doc\def.jpg')}}" alt="sfdg">
                </div>
            </div>
           
        </div>
    </div>
@endsection
