@extends('base')

@section('content')

<body>
    <div class="register">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" style="margin-left: 10px">IPT</a>
                <ul class="nav justify-content-right" style="margin-left: 80%">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                </ul>
                <ul class="nav justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                </ul>
                <ul class="nav justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                </ul>
                    {{-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> --}}
            </div>
        </nav>

    </div>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header bg-dark text-white">
                <h3 class="card-title">User Login Form</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

<style>
    body{
        background-color: rgb(84, 247, 165);
    }
</style>


@stop
