{!! Form::model($about, [
                   'method' => 'PATCH',
                   'url' => ['/admin/about/update', $about->id],
                   'class' => 'form-horizontal',
                   'enctype'=>'multipart/form-data'
               ]) !!}

               

<div class="form-group{{ $errors->has('about_us_content') ? 'has-error' : ''}}">
    {!! Form::label('about_us_content', 'About Us Content:', ['class' => 'control-label']) !!}
    {!! Form::textarea('about_us_content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('about_us_content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('mission_content') ? 'has-error' : ''}}">
    {!! Form::label('mission_content', 'Mission Content:', ['class' => 'control-label']) !!}
    {!! Form::textarea('mission_content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('mission_content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('vision_content') ? 'has-error' : ''}}">
    {!! Form::label('vision_content', 'Vision Content:', ['class' => 'control-label']) !!}
    {!! Form::textarea('vision_content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('vision_content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('core_values_content') ? 'has-error' : ''}}">
    {!! Form::label('core_values_content', 'Core Values Content:', ['class' => 'control-label']) !!}
    {!! Form::textarea('core_values_content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('core_values_content', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}