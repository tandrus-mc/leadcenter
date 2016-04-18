@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('leadlist.partials.create.lead-list')
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/create-leadlist.js') }}"></script>
@endsection