<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control' ] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('location') ? 'has-error' : ''}}">
    {!! Form::label('location', 'Location :', ['class' => 'control-label']) !!}
    {!! Form::text('location', null, ('required' == 'required') ? ['class' => 'form-control' ] : ['class' => 'form-control']) !!}
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Image :', ['class' => 'control-label']) !!}
    {!! Form::file('img', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content : ', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ('required' == 'required') ? ['class' => 'form-control crud-richtext'] : ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
