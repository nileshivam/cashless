@extends('layouts.main')

@section('styles')
    <style>
        .right-0 {
            right:0 !important;
            height:100% !important;


            padding:0;
        }
        ul.category_button{
            list-style-type:none;
            white-space:nowrap;
            overflow-x:auto;
            padding:20px 0
        }

        ul.category_button li{
            display:inline;
        }
        .chat-out-list {
            padding:10px 0 !important;
        }
    </style>
@endsection

@section('left-content')
    @include('vendors.left-sidebar')
@endsection

@section('right-content')
    @include('vendors.shop')
@endsection

