@extends('layouts.admin')
@section('content')

<div>
    <div>
    @foreach($posts as $post)
    <div><a href="{{ route('show', $post->id) }}">{{ $post->id }}. {{ $post->title }} | {{ $post->post_content }} | {{ $post->image }}</a></div>
    @endforeach
 
    </div>
    <div class="mt-3">
    {{ $posts->withQueryString()->links() }}
    </div>
</div>

@endsection