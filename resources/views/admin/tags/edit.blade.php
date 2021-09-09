@extends('layouts.app')
 
@section('content')
    @include('toast::messages')
 
    @include('admin.includes.errors')
    
    
    <div class="card">
        <div class="card-header">
           Edit : {{$tag ->tag}}
        </div>
        <div class="card-body">
            <form action="{{route('tag.store', ['id' => $tag->id])}}" method="POST" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection