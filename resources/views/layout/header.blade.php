<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBlog @yield('title')</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">


</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('blog') }}">MyBlog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('blog') }}">Blog</a></li>

                @if(isset($name))
                    <li><a href="#">{{$name}}</a></li>
                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                @else
                    <li><a href="{{ route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @endif


              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>
    @yield('content')
    @include('layout.footer')