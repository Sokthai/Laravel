<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laracast Project Flyer 2</title>
    <link rel="stylesheet" href="/css/libs.css"> {{--sweetaler--}}
    <link rel="stylesheet" href="/css/app.css">

    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>




    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>





</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif











    <div class="container">
        @yield('content')
    </div>


    <script src="/js/libs.js"></script>
    <script type="text/javascript">
        $('div.alert').delay(3000).slideUp(500);
//        swal({
//            title: "Error!",
//            text: "Here's my error message!",
//            type: "success",
//            confirmButtonText: "Cool"
//        });
    </script>
    @include('flash')
</body>
</html>

