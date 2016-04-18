<style>
    .form-group{
        padding-bottom: 50px;
    }

    .btn-green{
        background-color: #1b815e;
    }

    .btn-container{
        padding-top: 25px;
        width: 100%;
    }
</style>

<!-- SUPPOR TICKET FORM -->
<div class="widget">
    <div class="widget-header">
        <h3><i class="fa fa-upload"></i> Upload Lead List</h3>
    </div>
    <div class="widget-content">
        {!! Form::open(['url' => 'leadlist/']) !!}
            <fieldset>
                <legend>General Information</legend>
                <div class="form-group">
                    <label for="leadListName" class="col-sm-2 control-label">List Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="leadListName" id="leadListName" placeholder="List Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="leadListNotes" class="col-sm-2 control-label">List Notes</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="leadListNotes" id="leadListNotes" rows="5" cols="30" placeholder="Notes"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 btn-container">
                        <button type="submit" class="btn btn-primary btn-block btn-green">Next</button>
                    </div>
                </div>
            </fieldset>
        {!! Form::close() !!}
    </div>
</div>
<!-- END SUPPORT TICKET FORM -->