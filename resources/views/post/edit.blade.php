@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('update',$post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">           
        </div>
        <div class="form-group">
            <label for="post_content">Content</label>
                <textarea name="post_content" class="form-control" id="post_content" placeholder="Content"></textarea>           
        </div>
        <div class="form-group">
            <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="Image" placeholder="Image">           
        </div>
        <div class="from-group">
            <label for="Category">Category</label>
            <select class="form-control" id="Category" name="category_id">
                @foreach ($categories as $category)
                    <Option 
                        {{ $category->id === $post->category->id ? ' selected' : '' }}
                    
                    value="{{ $category->id }}">{{ $category->title }}</Option> 
                @endforeach             
            </select>
        </div>
        <div class="from-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" id="tags" name="tags[]" >
                @foreach ($tags as $tag)
                    <option 
                    @foreach ($post->tags as $postTag)
                    {{ $tag->id === $postTag->id ? ' selected' : '' }}
                        
                    @endforeach
                    value="{{ $tag->id }}">{{ $tag->title }}
                    </option>  
                @endforeach               
            </select>
        </div>
        
        <button tipe="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection