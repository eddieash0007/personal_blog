@extends('layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')

    @include('admin.includes.errors')
    
    <div class="card">
        <div class="card-header">
            Create A New Post
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                              <option value="{{ $category->id }}"> {{ $category->name }}  </option>                          
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    @foreach ($tags as $tag)
                    
                    <div class="checkbox">
                        <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{ $tag->tag }}</label>
                    </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                   <textarea name="content" id="content" cols="5" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">
                            Store Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection



@section('scripts')

@endsection