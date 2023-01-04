@extends('layouts.task')
@section('content')


<div>
    <div>
        @foreach($tasks as $task)
        <div><a href="{{ route('showTask', $task->id) }}">{{ $task->id }}. {{ $task->title }} | {{ $task->task }} | {{ $task->status }}</a></div>
        @endforeach
     
    </div>
    <div class="mt-3">
        {{ $tasks->withQueryString()->links() }}
    </div>
</div>

    

    
@endsection