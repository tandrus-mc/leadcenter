{!! Form::open(['route' => 'leadlist.store']) !!}
<div class="form-group">
    {!! Form::label('list-name', 'List Name:') !!}
    {!! Form::text('list-name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit', null, ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}