<div class="form-group{{ $errors->has('service') ? ' has-error' : ''}}">
    {!! Form::label('service', 'Service Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('service', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('service', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error' : ''}}">
    {!! Form::label('content', 'Content: ', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
