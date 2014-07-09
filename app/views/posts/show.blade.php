@extends('layouts.master')
@section('content')
<h1>{{{ $post->title }}}</h1>
<h4>Author: {{{ $post->user->email }}}</h4>
<h4>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h4>

@if ($post->img_path)
    <img src="{{{ $post->img_path }}}" class="img-reponsive">
@endif
<p>{{ $post->renderBody() }}</p>

<a href="#" class="deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>
{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}
@stop

@section('bottomscript')
<script type="text/javascript">
    $(".deletePost").click(function() {
        if (confirm("Are you sure you want to delete post")) {
            $('#deleteForm').submit();
        }
    });
</script>
@stop