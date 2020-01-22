@section('title', "$post->metatitle")
@section('dscr', "$post->dscr")
@section('keywords', '')

@extends('layouts.main')

@section('content')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-9">
            <div class="blog-single-image">
                <img src="/images/blog/{{$post->image}}" style="max-width: 100%; height:auto;"/>
            </div> 
            <div class="blog-single-title">
                <h1>{{$post->title}}</h1>
            </div>
            <div class="blog-signle-date">
            {{date("l, F j ", strtotime($post->created_at))}}
            </div>
            <div class="blog-single-text">
            {!!$post->body!!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="blog-single-sidebar">
                <a href="https://oncueapp.com/flash-moving">
                <img src="/images/blog/123.png" />
                </a>
            </div>
        </div>
    </div>  
</div>
<br>
<br>
<br>
@stop

<!-- @section('comments')
<script id="dsq-count-scr" src="//borntomove.disqus.com/count.js" async></script>
@stop -->
