@extends('layouts.master')

@section('content')
<div id="container">
    <h1>All the Posts</h1>
    <hr>
@foreach ($posts as $post)
    <h2>{{{ $post->title }}}</h2>
    <p>{{{ $post->body }}}</p>
@endforeach
</div>
@stop