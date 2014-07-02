@extends('layouts.master')
@section('content')
<h1>{{{ $post->title }}}</h1>
<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
<p>{{{ $post->body }}}</p>
@stop