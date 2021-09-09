@extends('layouts.app')

@section('content')

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            Posted
                        </div>
                        <div class="card-body text-center">
                            <h1 class="text-center">{{$post_count}}</h1>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            Trashed Posts
                        </div>
                        <div class="card-body text-center">
                            <h1 class="text-center">{{$trash_count}}</h1>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card card-info">
                        <div class="card-header text-center">
                            Users
                        </div>
                        <div class="card-body text-center">
                            <h1 class="text-center">{{$users_count}}</h1>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            Categories
                        </div>
                        <div class="card-body text-center">
                            <h1 class="text-center">{{$categories_count}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            
       
</div>
@endsection
