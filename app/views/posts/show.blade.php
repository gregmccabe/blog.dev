@extends('layouts.master')

@section('content')

<h1 class="title">{{{ $post->title }}}</h1>

<h4>Author: {{{ $post->user->email }}}</h4>

<h4>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h4>

<hr>

@if ($post->img_path)
    <img src="{{{ $post->img_path }}}" class="img-reponsive">
@endif

<p>{{ $post->renderBody() }}</p>

@if (Auth::check())
    <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
    <a href="#" class="deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>
{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}
@endif

<hr>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'greg-s-mccabe'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>


@stop

@section('bottomscript')



<script type="text/javascript">
    $(".deletePost").click(function() {
        if (confirm("Are you sure you want to delete post")) {
            $('#deleteForm').submit();
        };
    });
</script>

@stop