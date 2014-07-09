<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title></title>
    <link href="/css/lumen-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog_stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/smoothscroll.js"></script>
    <script src="/js/Chart.js"></script>
</head>
    <body>
        <div class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A var_dump(for my thoughts);</a>
          </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ action('PostsController@index') }}">Home</a></li>
            <li><a href="{{ action('HomeController@showResume') }}">Resume</a></li>
            <!-- <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> -->
              <!-- <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Dropdown header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul> -->
            <!-- </li> -->
          </ul>
          {{ Form::open(array('action' => 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
                  {{ Form::text('search', null, array('placeholder' => 'Search Query', 'class' => 'form-control col-lg-8')) }}
                  <button type="submit" class="btn btn-primary">Submit</button>
          {{ Form::close() }}
          <ul class="nav navbar-nav navbar-right">

            @if (Auth::check())
            <li><a href="{{ action('HomeController@doLogout') }}">Log out</a></li>
            @else
            <li><a href="{{ action('HomeController@showLogin') }}">Log In</a></li>
            @endif
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </li>
          </ul>
        </div>
      </div>
        <div class="container">
            @yield('content')

            @if (Session::has('successMessage'))
                <div class="alert alert-success">
                    {{{ Session::get('successMessage') }}}
                </div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">
                    {{{ Session::get('errorMessage') }}}
                </div>
            @endif
        </div>

@yield('bottomscript')


    <script src="/js/bootstrap.js"></script>
    </body>
</html>