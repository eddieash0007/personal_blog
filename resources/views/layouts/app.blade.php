<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{  asset('css/toastr.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('sweetalert::alert')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if (Auth::check())

                <div class="col-lg-4">
                    <main class="py-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{route('home')}}"> Home</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('categories')}}"> Categories</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('tags')}}"> Tags</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('tags.create')}}"> Create a New Tag</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('category.create')}}"> Create New category</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('posts')}}"> All Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('posts.trashed')}}"> Trashed Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('posts.create')}}"> Create New Post</a>
                            </li>
                            @if (Auth::user()->admin)
                            <li class="list-group-item">
                                <a href="{{ route('users')}}">Users</a>
                            </li>   
                            <li class="list-group-item">
                                <a href="{{ route('user.create')}}"> New User</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('settings')}}"> Settings</a>
                            </li>

                            @endif
                            
                        </ul>
                    </main>
                </div>
                    
                @endif
                <div class="col-lg-8">
                    <main class="py-4">
                        @include('sweetalert::alert')
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
       
    </div>

    <script src="{{ asset('js/toastr.min.js')}}"></script>

  
   
    <script>
        
        @if(Session::has('success'))
            {
                toastr.success("{{ Session::get('success') }}");
            }
         @endif  
         
         @if(Session::has('info'))
            {
                toastr.info("{{ Session::get('info') }}");
            }
         @endif  
        

    </script>
    @yield('scripts')
</body>
</html>


<div class="modal-body">
    <form action="{{route('category.update', ['id'=> $category->id])}}" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$category->name}}" name="name">
          </div>
      
      <div class="card-footer">
          <div class="form-group">
            <button type="submit" class="btn btn-primary float-right">Update Category</button>
          </div>
        
      </div>
  
    </form>
</div>