@extends('layouts.main')
@section('content')

    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div> 
        <div>{{ $post->post_content }}</div>
           
    </div>
    <div>
        <a href="{{ route('edit.indexEdit',$post->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('destroy',$post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>

    <div>
        <a href="{{ route('index.indexPost') }}">Back</a>
    </div>    
    
    
@endsection