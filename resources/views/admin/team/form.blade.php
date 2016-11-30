<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    {!! Form::label('position', 'Position', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('position', null, ['class' => 'form-control']) !!}
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('information') ? 'has-error' : ''}}">
    {!! Form::label('information', 'Information', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('information', null, ['class' => 'form-control']) !!}
        {!! $errors->first('information', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('facebook_link') ? 'has-error' : ''}}">
    {!! Form::label('facebook_link', 'Facebook Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('facebook_link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('facebook_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('twitter_link') ? 'has-error' : ''}}">
    {!! Form::label('twitter_link', 'Twitter Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('twitter_link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('twitter_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('instagram_link') ? 'has-error' : ''}}">
    {!! Form::label('instagram_link', 'Instagram Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('instagram_link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('instagram_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>