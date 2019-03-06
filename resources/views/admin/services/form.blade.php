<div class="form-group{{ $errors->has('services') ? ' has-error' : ''}}">

    {!! Form::label('services', 'Service Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('services', null, ['class' => 'form-control' ]) !!}
    {!! $errors->first('services', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error' : ''}}">
    {!! Form::label('content', 'Content: ', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
