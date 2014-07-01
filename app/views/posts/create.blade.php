@extends('layouts.master')
@section('content')
<h1>New Blog Post</h1>

   {{ $errors->first('title', '<span class="help-block">:message</span>') }}
   {{ $errors->first('body', '<span class="help-block">:message</span>') }}
<div id="container">
<form action="{{{ action('PostsController@store') }}}" method="POST">
    <p>
        <label for="title">Post Title</label>
        <input id="title" name="title" type="text" value= "{{{ Input::old('title') }}}">
    </p>
    <p>
        <label for="body">Post Body</label>
        <textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
    </p>
    <input type="submit">
</form>
</div>
@stop