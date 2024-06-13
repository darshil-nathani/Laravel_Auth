@extends('layout')
@section('content')
<body>
    <h1>Welcome {{Auth::user()->name}}</h1>
    <hr>
    <h3 class="font-weight-bold">This Is A Dashboard</h3>
    <div class="mt-3">
        <a class="btn btn-danger px-5 font-weight-bold" href="{{route('logout')}}">Logout</a>
    </div>
</body>
@endsection
