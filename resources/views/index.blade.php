@section('title', '')
@section('dscr', '')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')

@section('content')

    {{-- Hero --}}
    <section class="hero">
        <div class="hero__preview">
            <img src="/images/hero/IMG_7828.jpg" alt="" class="hero__img">
        </div>
        <div class="hero__container">
            <div class="hero__content hero__content--indents">
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

    {{-- Services --}}
    <section class="section">
        <h2 class="section__title">Services</h2>
        <div class="section-description section-description--small">Residential and commercial, local and interstate moves, packing solutions and other moving services<br>
            If you have any questions, give us a <u>call</u><br>
            <a class="link-marked" href="tel:+18572418778">+1 857 241 87 78</a>
        </div>
        <div class="services-collection">
            <div class="services-collection__list">
                <div class="row services-collection__row">
                    <div class="col-sm services-collection__item">
                        <div class="services-collection-item">
                            <div class="services-collection-item__background">
                                <div class="services-collection-item__preview">
                                    <img src="{{asset('images/services/IMG_7851.jpg')}}" alt="Local Moving" class="services-collection-item__img">
                                </div>
                            </div>
                            <div class="services-collection-item__title">Local Moving</div>
                        </div>
                    </div>
                    <div class="col-sm services-collection__item">
                        <div class="services-collection-item">
                            <div class="services-collection-item__background">
                                <div class="services-collection-item__preview">
                                    <img src="{{asset('images/services/Highwaytrucks.jpg')}}" alt="Local Moving" class="services-collection-item__img">
                                </div>
                            </div>
                            <div class="services-collection-item__title">Interstate moving</div>
                        </div>
                    </div>
                </div>
                <div class="row services-collection__row">
                    <div class="col-sm services-collection__item">
                        <div class="services-collection-item">
                            <div class="services-collection-item__background">
                                <div class="services-collection-item__preview">
                                    <img src="{{asset('images/services/Public_Storage_doors.jpg')}}" alt="Local Moving" class="services-collection-item__img">
                                </div>
                            </div>
                            <div class="services-collection-item__title services-collection-item__title--small">Storage</div>
                        </div>
                    </div>
                    <div class="col-sm services-collection__item">
                        <div class="services-collection-item">
                            <div class="services-collection-item__background">
                                <div class="services-collection-item__preview">
                                    <img src="{{asset('images/services/whitehomeoffice.jpg')}}" alt="Local Moving" class="services-collection-item__img">
                                </div>
                            </div>
                            <div class="services-collection-item__title services-collection-item__title--small">Commercial moving</div>
                        </div>
                    </div>
                    <div class="col-sm services-collection__item">
                        <div class="services-collection-item">
                            <div class="services-collection-item__background">
                                <div class="services-collection-item__preview">
                                    <img src="{{asset('images/services/d4f8081d917643ed96bd.jpg')}}" alt="Local Moving" class="services-collection-item__img">
                                </div>
                            </div>
                            <div class="services-collection-item__title services-collection-item__title--small">Packing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BG --}}
    <section class="section-bg">
        <div class="section-bg__container">
            <div class="section-bg__row">
                <div class="col-md-6 section-bg__col">
                    <div class="section-bg__content-position">
                        <div class="section-bg__content">
                            Reasonably priced, easy to communicate with, very professional and friendly!<br>
                            Karina D.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Prices --}}
    <section class="section">
        <h2 class="section__title">Our price</h2>
        <div class="section-description">No extra chargers and any hidden fees</div>

        <div class="section__collection">
            <div class="prices-collection">
                <div class="prices-collection__list">
                    <div class="row prices-collection__row">
                        <div class="col-md-4 prices-collection__item prices-collection__item--narrow">
                            <div class="prices-collection-item">
                                <h3 class="prices-collection-item__title">2 movers and truck</h3>
                                <div class="prices-collection-item__prices">
                                    <div class="prices-collection-item__price prices-collection-item__price--old">from $100/hour</div>
                                    <div class="prices-collection-item__price">from $90/hour</div>
                                </div>
                                <div class="prices-collection-item__features">
                                    <div class="prices-collection-item-features">
                                        <ul class="prices-collection-item-features__list">
                                            <li class="prices-collection-item-features__item">Studio/1 bedroom apartment</li>
                                            <li class="prices-collection-item-features__item">2 professional movers</li>
                                            <li class="prices-collection-item-features__item">Clean 18' Box Truck.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prices-collection-item__button">
                                    <a class="btn-simple" href="#">Book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 prices-collection__item prices-collection__item--wide">
                            <div class="prices-collection-item prices-collection-item--big">
                                <h3 class="prices-collection-item__title">2 movers and truck</h3>
                                <div class="prices-collection-item__prices">
                                    <div class="prices-collection-item__price prices-collection-item__price--old">from $100/hour</div>
                                    <div class="prices-collection-item__price">from $90/hour</div>
                                </div>
                                <div class="prices-collection-item__features">
                                    <div class="prices-collection-item-features">
                                        <ul class="prices-collection-item-features__list">
                                            <li class="prices-collection-item-features__item">Studio/1 bedroom apartment</li>
                                            <li class="prices-collection-item-features__item">2 professional movers</li>
                                            <li class="prices-collection-item-features__item">Clean 18' Box Truck.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prices-collection-item__button">
                                    <a class="btn-simple" href="#">Book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 prices-collection__item prices-collection__item--narrow">
                            <div class="prices-collection-item">
                                <h3 class="prices-collection-item__title">2 movers and truck</h3>
                                <div class="prices-collection-item__prices">
                                    <div class="prices-collection-item__price prices-collection-item__price--old">from $100/hour</div>
                                    <div class="prices-collection-item__price">from $90/hour</div>
                                </div>
                                <div class="prices-collection-item__features">
                                    <div class="prices-collection-item-features">
                                        <ul class="prices-collection-item-features__list">
                                            <li class="prices-collection-item-features__item">Studio/1 bedroom apartment</li>
                                            <li class="prices-collection-item-features__item">2 professional movers</li>
                                            <li class="prices-collection-item-features__item">Clean 18' Box Truck.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prices-collection-item__button">
                                    <a class="btn-simple" href="#">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="alert-block">
                        <div class="alert-block__icon">
                            <svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"> <circle style="fill:#fff70d;" cx="12.125" cy="12.125" r="12"></circle> <g> <path style="fill: #fff;" d="M10.922,6.486c0-0.728,0.406-1.091,1.217-1.091s1.215,0.363,1.215,1.091c0,0.347-0.102,0.617-0.304,0.81 c-0.202,0.193-0.507,0.289-0.911,0.289C11.328,7.585,10.922,7.219,10.922,6.486z M13.252,17.792h-2.234V9.604h2.234V17.792z"></path> </g> </svg>
                        </div>
                        <div class="alert-block__content">
                            <b>Note:</b> Hourly rate includes moving blankets, disassembling/reassembling of furniture, tolls, gas and milleage.
                        </div>
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
