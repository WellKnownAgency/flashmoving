@section('title', "Moving Blog Flash Moving Company")
@section('dscr', "Blog Articles about moving from Flash Moving Company. Smart ideas and tips to help you make your move smooth and stress-free.")
@section('keywords', '')

@extends('layouts.main')
@section('preload')
<link rel="canonical" href="https://www.flashmoving.com/blog" /> 
@stop
@section('content')
<div class="blog" style="padding-bottom: 0px;">
    <div class="container">
        <div class="contact_intro" >
        <h1 style="font-size: 48px;">BLOG</h1>
        </div>

    </div>
    <div class="section">
        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div  style="height: 200px;">
                        <a href="/blog/{{$post->slug}}">
                            <div class="blog-card-image" style="background-image:url(/images/blog/{{ $post->image }});">

                            </div>
                        </a>
                     </div>
                    <div class="blog-card-text">
                        <div class="blog-card-date">
                        {{date("l, F j ", strtotime($post->created_at))}}
                        </div>
                        <div class="blog-card-title">
                            <a href="/blog/{{$post->slug}}"> {{ str_limit($post->title, 57) }}</a>
                        </div>
                        <div class="blog-card-p">
                        {{ str_limit($post->excerpt, 150) }}
                        <br>
                            <a class="tt_button kd-animated zoomIn" href="/blog/{{$post->slug}}">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-md-12 text-center">{{$posts->links()}}</div>
            </div>
        </div>
    </div>
</div>
@stop
