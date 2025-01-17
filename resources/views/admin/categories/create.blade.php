@extends('layouts.app')
 
@section('content')
    @include('toast::messages')
 
    @include('admin.includes.errors')
    
    
    <div class="card">
        <div class="card-header">
            Create A New Category
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="POST" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store Category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection