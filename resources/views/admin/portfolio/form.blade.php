<div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
    {!! Form::label('title', 'Title : ', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' ]) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tech_used') ? ' has-error' : ''}}">
    {!! Form::label('tech_used', 'Technology Used : ', ['class' => 'control-label']) !!}
    {!! Form::text('tech_used', null, ['class' => 'form-control' ]) !!}
    {!! $errors->first('tech_used', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('url') ? ' has-error' : ''}}">
    {!! Form::label('url', 'Url : ', ['class' => 'control-label']) !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('url') ? ' has-error' : ''}}">
    {!! Form::label('url', 'Image : ', ['class' => 'control-label']) !!}
    {!! Form::file('url', null, ['class' => 'form-control' ]) !!}
    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error' : ''}}">
    {!! Form::label('content', 'Content : ', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control crud-richtext', 'required' => 'required']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
