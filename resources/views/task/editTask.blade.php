@extends('layouts.task')
@section('content')
<div>
    <form action="{{ route('update',$task->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">           
        </div>
        <div class="form-group">
            <label for="task">Task</label>
                <textarea name="task" class="form-control" id="task" placeholder="Task"></textarea>           
        </div>
        
        
        
        <button tipe="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection