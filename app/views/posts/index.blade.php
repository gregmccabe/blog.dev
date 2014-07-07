@extends('layouts.master')

@section('content')

<div id="container">
    <h1>All Posts</h1>
    <hr>
    <div>
        <a href="{{ action('PostsController@create') }}" class="btn btn-primary">Create Post</a>
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
        <td><a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
    </tr>
    @endforeach
    </table>
    {{ $posts->links() }}
</div>


@stop