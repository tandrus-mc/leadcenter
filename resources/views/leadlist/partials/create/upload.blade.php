<style>
    .form-group{
        padding-bottom: 50px;
    }

    .btn-green{
        background-color: #1b815e;
    }
</style>

<!-- SUPPOR TICKET FORM -->
<div class="widget">
    <div class="widget-header">
        <h3><i class="fa fa-upload"></i> Upload Lead List</h3>
    </div>
    <div class="widget-content">
        <fieldset>
            {!! Form::open( ['class' => 'dropzone', 'files' => 'true', 'id' => 'list-upload']) !!}
            {!! Form::close() !!}
        </fieldset>
    </div>
</div>
<!-- END SUPPORT TICKET FORM -->