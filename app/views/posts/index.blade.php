@extends('layouts.master')

@section('content')

<div class="container">
    <h1 class="title">All Posts</h1>
    <hr>

    @if (Auth::check())
    <a href="{{ action('PostsController@create') }}" class="btn btn-primary">Create Post</a>
    @endif

    <br>

    @foreach ($posts as $post)
    <div class="row">
        <br>
        <div class="col-md-2 col-sm-3 text-center">
            <a class="story-img" href="{{ action('HomeController@showResume') }}"><img src="/greg.jpg" style="width:100px;height:100px" class="img-circle"></a>
        </div>
        <div class="col-md-10 col-sm-9">
            <h3><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></h3>
            <div class="row">
                <div class="col-xs-9">
                    <p>{{{ $post->user->email }}}</p>
                    <p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
                    <blockquote>{{ $post->renderBody(true) }}</blockquote>
                    <p>
                        @if (Auth::check())
                                <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
                                <a href="#" class="deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>
                        @endif
                    </p>
                    <p class="lead"><a href="{{ action('PostsController@show', $post->id) }}" class="btn btn-default">Read More</a></p>

                </div>
                <div class="col-xs-3"></div>
            </div>
            <br><br>
        </div>
    </div>
    <hr>
    @endforeach

    {{ $posts->links() }}

</div>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}

@stop

@section('bottomscript')

<script type="text/javascript">
    $(".deletePost").click(function() {
        var postId = $(this).data('postid');
        $("#deleteForm").attr('action', '/posts/' + postId);
        if (confirm("Are you sure you want to delete post")) {
            $('#deleteForm').submit();
        };
    });
</script>

@stop