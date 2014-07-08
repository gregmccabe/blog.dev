@extends('layouts.master')
@section('content')
<h1>{{{ $post->title }}}</h1>
<h4>Author: {{{ $post->user->email }}}</h4>
<h4>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h4>

@if ($post->img_path)
    <img src="{{{ $post->img_path }}}" class="img-reponsive">
@endif
<p>{{{ $post->body }}}</p>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}<br>
<p>{{ Form::submit('Delete') }}</p>
{{ Form::close() }}
@stop
