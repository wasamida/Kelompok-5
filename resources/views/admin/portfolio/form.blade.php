<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    {!! Form::label('photo', 'Photo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('photo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>