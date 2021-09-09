@extends('layouts.app')
 
@section('content')
    @include('toast::messages')
 
    @include('admin.includes.errors')
    
    
    <div class="card">
        <div class="card-header">
            Edit your profile
        </div>
        <div class="card-body">
            <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="passwords">New Passwords</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Upload New Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Facebook profile</label>
                    <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                </div>

                <div class="form-group">
                    <label for="name">Youtube profile</label>
                    <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control"> {{$user->profile->about}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection