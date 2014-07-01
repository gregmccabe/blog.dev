@extends('layouts.master')
@section('content')
<h2>{{{ $post->title }}}</h2>
<p>{{{ $post->created_at }}}</p>
<p>{{{ $post->body }}}</p>
@stop