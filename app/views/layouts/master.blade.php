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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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

                <a class="navbar-brand" href="{{ action('PostsController@index') }}">A var_dump(for my thoughts);</a>

            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ action('PostsController@index') }}">Home</a></li>
                    <li><a href="{{ action('HomeController@showResume') }}">Resume</a></li>

                </ul>

                {{ Form::open(array('action' => 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
                    {{ Form::text('search', null, array('placeholder' => 'Search Query', 'class' => 'form-control col-lg-8')) }}
                    <button type="submit" class="btn btn-primary">Submit</button>
                {{ Form::close() }}

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://github.com/gregmccabe"><i class="fa fa-github-square big-icon"></i></a></li>
                    <li><a href="https://twitter.com/Greg_McCabe"><i class="icon-twitter big-icon"></i></a></li>
                    <li><a href="https://www.facebook.com/RedStar.Hobby"><i class="icon-facebook big-icon"></i></a></li>
                    <li><a href="https://www.linkedin.com/pub/greg-mccabe/19/9b1/739"><i class="icon-linkedin big-icon"></i></a></li>

                    @if (Auth::check())
                    <li><a href="{{ action('HomeController@doLogout') }}">Log out</a></li>
                    @else
                    <li><a href="{{ action('HomeController@showLogin') }}">Log In</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="container">
            @if (Session::has('successMessage'))
                <div class="alert alert-success" id="fade_message">
                    {{{ Session::get('successMessage') }}}
                </div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger" id="fade_message">
                    {{{ Session::get('errorMessage') }}}
                </div>
            @endif
            @yield('content')
        </div>

@yield('bottomscript')


        <script src="/js/bootstrap.js"></script>
        <script>
        $('#fade_message').delay(2000).fadeOut(1000);
        </script>
    </body>
</html>