@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('tasks/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Tasks</label></br>
        <input type="text" name="task" id="task" value="{{$tasks->task}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$tasks->status}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop