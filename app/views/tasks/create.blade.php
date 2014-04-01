<h1>Create</h1>
{{ HTML:: ul($errors->all()) }}
 {{ Form::model('task', array('action' => 'TasksController@store')) }}
 
    <div class="form-group">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', null) }}
    
    </div>
    {{ Form::submit('Create') }}
  
  {{ Form::close() }}