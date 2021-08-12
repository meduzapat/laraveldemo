{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tasks')) }}

<div class="form-group">
{{ Form::label('name', 'Name') }}
{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('description', 'Description') }}
{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('user', 'User') }}
{{ Form::select('user', $users, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create Task', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
