@extends('layout')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('loginMatch')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" >
                                @error('email')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input value="{{ old('password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
                                @error('password')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            @if(session('message'))
                            <div class="text-danger">
                                {{session('message')}}
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                            <a href="{{route('home')}}" class="btn btn-primary btn-block mt-3 mx-1">Back</a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <p>Don't have an account?<a href="{{route('register')}}" class="btn btn-link"> Sign Up </a></p>
                        </div>
                    </div>
                </div>

                {{-- @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
            </div>
        </div>
    </div>
</body>
@endsection

