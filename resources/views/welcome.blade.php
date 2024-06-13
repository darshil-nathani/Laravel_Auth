@extends('layout')
@section('content')
<body>
    <h1 class="mt-3">Laravel Authentication</h1>
    <hr class="mt-3">
    <div class="mt-3">
        <a class="btn btn-primary px-5 font-weight-bold" href="{{route('register')}}">registeration</a>
        <a class="btn btn-primary px-5 font-weight-bold" href="{{route('login')}}">Login</a>
    </div>
</body>
@endsection

