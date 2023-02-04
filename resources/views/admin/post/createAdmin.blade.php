@extends('layouts.admin')
@section('content')
<div>
    
    <form action="{{ route('AdmStore') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
                <input 
                    value="{{ old('title') }}"
                    type="text" name="title" class="form-control" id="title" placeholder="Title">           
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group">
            <label for="post_content">Content</label>
                <textarea name="post_content" class="form-control" id="post_content" placeholder="Content">{{ old('post_content') }}</textarea>           
            
            @error('post_content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
                <input value="{{ old('image') }}" type="text" name="image" class="form-control" id="Image" placeholder="Image">           
            
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="from-group">
            <label for="Category">Category</label>
            <select class="form-control" id="Category" name="category_id">
                @foreach ($categories as $category)
                    <Option 
                    {{ old('category_id') == $category->id ? ' selected' : ''}}
                    
                    value="{{ $category->id }}">{{ $category->title }}</Option> 
                @endforeach             
            </select>
        </div>

        <div class="from-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" id="tags" name="tags[]" >
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>  
                @endforeach               
            </select>
        </div>
        
        <button tipe="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection