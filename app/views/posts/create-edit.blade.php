@extends('layouts.master')
@section('content')

@if (isset($post))
    <h1>Edit Post</h1>
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
@else
    <h1>New Blog Post</h1>
    {{ Form::open(array('action'=>'PostsController@store', 'files' => true)) }}
@endif


    <div class="form-group">
        {{ Form::label('title', 'Title') }}<br>
        {{ Form::text('title', null, array('class' => 'form-control')) }}<br>
        {{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}<br>
        {{ Form::textarea('body', null, array('class' => 'form-control', 'size' => '10x10')) }}<br>
        {{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
    </div>
    <br>
    <div class="form-group">
        {{ Form::file('image') }}
        <p class="help-block">Upload an image. Images cannot be more than 500x500 pixels.</p>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{ Form::close() }}
    </div>
<!-- <button type="button" class="btn btn-primary">Submit</button> -->
@stop



<!-- <textarea class="form-control" rows="3"></textarea> -->