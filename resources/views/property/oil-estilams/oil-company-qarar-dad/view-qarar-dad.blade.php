@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="header mt-4">
                <button class="btn btn-primary " onClick="javascript:window.print();"><i
                        class="si si-wallet"></i> Pdf </button>
                <button class="btn btn-secondary " onClick="javascript:window.print();"><i
                        class="si si-paper-plane"></i>Excel</button>
                <button class="btn btn-info " onClick="javascript:window.print();"><i
                        class="si si-printer"></i> Print</button>
            </div>
            <div class="main-proifle">
                <div class="row col-md-12">
                    <img src="https://www.fardadgroup.com/wp-content/uploads/2021/01/Sample-commission-contract-2.jpg" alt="">
                    <img src="https://www.fardadgroup.com/wp-content/uploads/2021/01/Sample-commission-contract-2.jpg"  alt="">
                    <img src="https://www.fardadgroup.com/wp-content/uploads/2021/01/Sample-commission-contract-2.jpg"   alt="">
                </div>
            </div>
           
        </div>
    </div>
@endsection