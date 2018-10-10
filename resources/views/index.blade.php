@section('title', '')
@section('dscr', '')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')

@section('content')
    <section class="hero">
        <div class="hero__background">
            <div class="hero__preview">
                <img src="/images/hero/IMG_7828.jpg" alt="" class="hero__img">
            </div>
        </div>
        <div class="hero__container">
            <div class="hero__content">
                <div class="hero__row">
                    <div class="hero__title">
                        <div class="hero-title">
                            <span class="hero-title__dynamic"></span>
                            <div class="hero-title__simple">Movers in Boston area</div>
                        </div>
                    </div>
                    <div class="hero__description">Without any hidden fees and extra chargers</div>
                    <div class="hero__button">
                        <a class="btn-hero" href="#">Free estimate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('customjs')
    <script>
        // Hero section
        new Typed('.hero-title__dynamic', {
            strings: ["Insured", "Licensed", "Bonded"],
            typeSpeed: 200,
            backSpeed: 10,
            startDelay: 600,
            backDelay: 800,
            loop: true
        });
    </script>
@stop
