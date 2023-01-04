@extends('layouts.task')
@section('content')

    <div>
        <div>{{ $task->id }}. {{ $task->title }}</div> 
        <div>{{ $task->task }}</div>
           
    </div>
    <div>
        <a href="{{ route('editTask',$task->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('destroyTask',$task->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>

    <div>
        <a href="{{ route('allTaskView') }}">Back</a>
    </div>    
    
    
@endsection