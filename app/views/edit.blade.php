
@extends('layouts.master')
@section('content')

<h1>Edit Post</h1>
   {{ $errors->first('title', '<span class="help-block">:message</span>') }}
   {{ $errors->first('body', '<span class="help-block">:message</span>') }}
<div id="container">

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}


{{ Form::open(array('action'=>'PostsController@store')) }}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
<br>
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body') }}
<br>
    <input type="submit">
    {{ Form::close() }}
</div>
@stop