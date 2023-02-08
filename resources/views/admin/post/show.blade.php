@extends('layouts.admin')
@section('content')

    <div>
        <table class="table">
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
    <div>
        <a href="{{ route('edit',$post->id) }}">Update</a>
    </div>
    <div>
        <form action="{{ route('destroy',$post->id) }}" method="post">
            @csrf
            @method('delete')
            
            <input type="submit" value="Delete">
        </form>
    </div>

    <div>
        <a href="{{ route('baseAdmin') }}">Back</a>
    </div>    
    
    
@endsection