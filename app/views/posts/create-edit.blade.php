@extends('layouts.master')
@section('content')

@if (isset($post))
    <h1>Edit Post</h1>
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
@else
    <h1>New Blog Post</h1>
    {{ Form::open(array('action'=>'PostsController@store')) }}
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
    <div>
        <button type="submit" class="btn btn-success">Submit</button>
        {{ Form::close() }}
    </div>
@stop

<!-- <textarea class="form-control" rows="3"></textarea> -->