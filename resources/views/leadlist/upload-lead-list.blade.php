@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('leadlist.partials.create.upload')
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/upload-leadlist.js') }}"></script>
@endsection