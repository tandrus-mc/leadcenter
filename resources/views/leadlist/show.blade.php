@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="widget">
            <div class="widget-header">
                <h3>List Name: {{ $leadList->list_name }}</h3>
            </div>
            <div class="widget-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="project-section general-info">
                                @include('leadlist.partials.show.general-info')
                            </div>

                            @include('leadlist.partials.show.table')

                            <div class="project-section activity">
                                @include('leadlist.partials.show.activity')
                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('leadlist.partials.show.associated-files')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/datatables.js') }}"></script>

    <script>
        $('.datatable').dataTable({
            sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "scrollX": true,
        });
    </script>

@endsection


