@extends('layouts.admin')
@section('content')

<div>
    <div>
        
    @foreach($posts as $post)
    <div>
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Content</th>
                  <th scope="col">Image</th>
                </tr>
              </thead>
        <tbody>
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->post_content }}</td>
            <td>{{ $post->image }}</td>
          </tr>             
        </tbody>
      </table>
    </div>
    @endforeach
        
</div>
    <div class="mt-3">
    {{ $posts->withQueryString()->links() }}
    </div>
</div>

@endsection


<!--<div><a href="{{ route('show', $post->id) }}">{{ $post->id }}. {{ $post->title }} | {{ $post->post_content }} | {{ $post->image }}</a></div>table-striped mb-0-->