<div class="widget">
    <div class="widget-header">
        <h3>General Info</h3>
        <button type="button" class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i> Edit Project</button>
    </div>
    <div class="widget-content">
        <p>{{ $leadList->list_notes }}</p>

        <div class="widget-footer">
            <div class="row">
                <div class="col-sm-12">
                    <dl class="dl-horizontal">
                        <dt>Upload Date:</dt>
                        <dd>September 20, 2014</dd>
                        <dt>Last Modified:</dt>
                        <dd>December 20, 2014</dd>
                        <dt>List Owner:</dt>
                        <dd>{{ $leadList->user()->first()->name }}</dd>
                        <dt>Status:</dt>
                        @if($leadList->validation == 'working')
                            <dd><span class="label label-warning">Validating</span></dd>
                        @elseif($leadList->validation == 'success')
                            <dd><span class="label label-success">Complete</span></dd>
                        @elseif($leadList->validation == 'error')
                            <dd><span class="label label-danger">Errors</span></dd>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>