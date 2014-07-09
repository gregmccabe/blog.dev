@extends('layouts.master')

@section('content')

<div id="container">
    <h1>All Posts</h1>
    <hr>
    <div>
        @if (Auth::check())
        <a href="{{ action('PostsController@create') }}" class="btn btn-primary">Create Post</a>
        @endif
    </div>
    <br>
    <table class="table table-striped">
        <tr>
            <th>title</th>
            <th>Author Email</th>
            <th>created</th>
            <th>action</th>
        </tr>
    @foreach ($posts as $post)

    <tr>
        <td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td>
        <td>{{{ $post->user->email }}}</td>
        <td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
        <td>
    @if (Auth::check())
            <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
            <a href="#" class="deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>
    @endif
        </td>
    </tr>
    @endforeach
    </table>
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
        }
    });
</script>
@stop