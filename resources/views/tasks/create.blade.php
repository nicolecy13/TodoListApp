@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Task Page</div>
  <div class="card-body">
      
      <form action="{{ url('tasks') }}" method="post">
        {!! csrf_field() !!}
        <label>Task</label></br>
        <input type="text" name="task" id="task" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop