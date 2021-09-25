
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
                        <a class="nav-link" href="{{url('/login')}}">Logout</a>
                    </li>
                </ul>
                {{-- <ul class="nav justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                </ul> --}}
            </div>
        </nav>

    </div>
</body>
<br>
    <div class="page-content mt-5" style="text-align: center">
        <h1>My Playlists. </h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-image">
                <thead>
                    <tr>
                        <td>
                            <img src="{{URL::to('/picture/1.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/2.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/3.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/4.png')}}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{URL::to('/picture/5.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/6.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/7.png')}}" alt="">
                        </td>
                        <td>
                            <img src="{{URL::to('/picture/8.png')}}" alt="">
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<style>
    body{
        color: white;
        background-color: rgb(11, 129, 80);
        background-image: url('/picture/bg2.jpg');

    }



</style>




@endsection

