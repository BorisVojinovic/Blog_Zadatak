
<!-- Page Header-->
@extends('layouts.admtema')
@section('content')

    <div class="container">
        <h3 style="color:black">User profile for: {{auth()->user()->name}}</h3>
    </div>

    <div class="col-sm-5 row-cols-1">
        <form method="post" action="" enctype=multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="number" name="id" class="form-control" id="id" value="{{auth()->user()->id}}">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="{{auth()->user()->name}}">
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="Email" class="form-control" id="Email" value="{{auth()->user()->email}}">
            </div>
        </form>
    </div>

@endsection

{{--<!-- Main Content-->--}}
{{--<div class="container px-4 px-lg-5">--}}
{{--    @foreach($users as $user)--}}
{{--    <div class="row gx-4 gx-lg-5 justi  fy-content-center">--}}
{{--        <div class="col-md-10 col-lg-8 col-xl-7">--}}
{{--            <h1>{{ $user->id }}</h1>--}}

{{--            <p>{{ $user->about }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<!-- Footer-->--}}
{{--<footer class="border-top">--}}
{{--    <div class="container px-4 px-lg-5">--}}
{{--        <div class="row gx-4 gx-lg-5 justify-content-center">--}}
{{--            <div class="col-md-10 col-lg-8 col-xl-7">--}}
{{--                <ul class="list-inline text-center">--}}
{{--                    <li class="list-inline-item">--}}
{{--                        <a href="#!">--}}
{{--                                    <span class="fa-stack fa-lg">--}}
{{--                                        <i class="fas fa-circle fa-stack-2x"></i>--}}
{{--                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>--}}
{{--                                    </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item">--}}
{{--                        <a href="#!">--}}
{{--                                    <span class="fa-stack fa-lg">--}}
{{--                                        <i class="fas fa-circle fa-stack-2x"></i>--}}
{{--                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>--}}
{{--                                    </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item">--}}
{{--                        <a href="#!">--}}
{{--                                    <span class="fa-stack fa-lg">--}}
{{--                                        <i class="fas fa-circle fa-stack-2x"></i>--}}
{{--                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>--}}
{{--                                    </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<!-- Bootstrap core JS-->--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- Core theme JS-->--}}
{{--<script src="js/scripts.js"></script>--}}
{{--</body>--}}
{{--</html>--}}

