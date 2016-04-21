@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="widget">
                    <div class="widget-header">
                        <h3>List Overview</h3>
                    </div>
                    <div class="widget-content">
                        @foreach($leadLists->chunk(4) as $chunk)
                            <div class="row">
                                @foreach($chunk as $leadList)
                                    @if($leadList->validation == 'working')
                                        <div class="col-md-3" style="padding-top: 15px; padding-bottom: 15px;">
                                            <a href="{{ url('leadlist/'.$leadList->id) }}">
                                                <div class="contextual-summary-info contextual-background yellow-bg">
                                                    <i class="fa fa-hourglass-half"></i>
                                                    <p class="pull-right"><span>{{ $leadList->list_name }}</span> 35%</p>
                                                </div>
                                            </a>
                                        </div>
                                    @elseif($leadList->validation == 'success')
                                        <div class="col-md-3" style="padding-top: 15px; padding-bottom: 15px;">
                                            <div class="contextual-summary-info contextual-background green-bg">
                                                <i class="fa fa-check-circle"></i>
                                                <p class="pull-right"><span>{{ $leadList->list_name }}</span> 35%</p>
                                            </div>
                                        </div>
                                    @elseif($leadList->validation == 'error')
                                        <div class="col-md-3" style="padding-top: 15px; padding-bottom: 15px;">
                                            <div class="contextual-summary-info contextual-background error-bg">
                                                <i class="fa fa-times-circle"></i>
                                                <p class="pull-right"><span>{{ $leadList->list_name }}</span> 35%</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="widget-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection