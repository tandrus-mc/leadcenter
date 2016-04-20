@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('main-content')
    <div class="row">
        <div class="widget">
            <div class="widget-header">
                <h3>List Name: {{ $leadList->list_name }}</h3>
            </div>
            <div class="widget-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project-section general-info">
                                @include('leadlist.partials.show.general-info')
                            </div>
                            @include('leadlist.partials.edit.add-leads')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/upload-leadlist.js') }}"></script>
@endsection


