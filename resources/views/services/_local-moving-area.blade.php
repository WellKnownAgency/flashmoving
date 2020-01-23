@extends('layouts.main')

@section('content')

    {{-- Hero --}}
    <section class="hero">
        <div class="hero__preview">
            @yield('hero-image')
        </div>
        <div class="hero__wrapper-content">
            <div class="hero__container">
                <div class="hero__content">
                    <div class="hero__row hero__custom">
                        <div class="col-md-5">
                            <div class="hero__newtitle-bg">
                                <div class="hero__newtitle-text">
                                    <h1>@yield('hero-title')</h1>
                                </div>
                            </div>
                            <div class="hero__newdscr-bg">
                                <div class="hero__newdscr-text">
                                @yield('hero-description')
                                </div>
                            </div>
                            <div class="hero__abutton-wrapper">
                                <a href="https://oncueapp.com/flash-moving" class="hero__abutton">
                                    Get a Free Estimate
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="hero__container">
                <div class="hero__content">
                    <div class="hero__row">
                        <div class="col-md-7">
                            <div class="hero__title">
                                <div class="hero-title">
                                    <div class="hero-title__simple hero__title--static">@yield('hero-title')</div>
                                </div>
                            </div>
                            <div class="hero__description hero__description--big">@yield('hero-description')</div>
                        </div>
                    </div>
                    <div class="hero__row">
                        <div class="col-md-12 text-center">
                            <a href="/moving-quote" class="btn-hero btn-hero-nav btn-hero--large btn-hero--hover-green">Free Estimate</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- Seo text --}}
    <section class="section" style="padding-top:0px;">
        <div class="container-fluid" style="background-color: #ebebeb;">
            <div class="content-blocks">
                <div class="content-blocks__list">
                    @yield('content-list')
                </div>
            </div>
        </div>
    </section>


                {{-- Prices --}}
                <div class="section">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title section-title--upper">Our Advantages</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{asset('images/hero/IMG_79081.jpg')}}" alt="" class="newlp-block-image">
                            </div>
                            <div class="col-lg-6" style="margin-top: auto; margin-bottom: auto;">
                                <div class="row">
                                    <div class="col-lg-2 col-2 pr-0">
                                        <div class="newlp-block-icon" style="background-image:url(/images/sections/store_24.svg);"></div>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                        <div class="newlp-block-heading">
                                            <strong>Same Day Delivery</strong>
                                        </div>
                                        <div class="newlp-block-p">
                                            Your shipment can be easily delivered on the same day as the pick up. No one can beat our timing!
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-50">
                                    <div class="col-lg-2 col-2 pr-0">
                                        <div class="newlp-block-icon" style="background-image:url(/images/sections/warehouse.svg);"></div>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                        <div class="newlp-block-heading">
                                            <strong>Short-Term Storage</strong>
                                        </div>
                                        <div class="newlp-block-p">
                                            If you your place is not ready to move in, we're glad to provide you a short-term storage
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-50">
                                    <div class="col-md-2 col-2 pr-0">
                                        <div class="newlp-block-icon" style="background-image:url(/images/sections/purse.svg);"></div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="newlp-block-heading">
                                            <strong>Best Flat Rate / No Hidden Fees</strong>
                                        </div>
                                        <div class="newlp-block-p">
                                        Great Service with competitive prices. See our rates!
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-50">
                                    <div class="col-md-2 col-2 pr-0">
                                        <div class="newlp-block-icon" style="background-image:url(/images/sections/protect.svg);"></div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="newlp-block-heading">
                                            <strong>Reliable & Efficient</strong>
                                        </div>
                                        <div class="newlp-block-p">
                                        Our movers are fast, efficient and professional. You can be sure that team will arrive at your location just as agreed!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="section__collection">
                            <div class="prices-collection">
                                <div class="prices-collection__list">
                                    <div class="row prices-collection__row">
                                        <div class="col-md-4 prices-collection__item prices-collection__item--narrow">
                                            <div class="prices-collection-item">
                                                <h3 class="prices-collection-item__title">2 movers</h3>
                                                <div class="prices-collection-item__description">Studio/1 bedroom apartment</div>
                                                <div class="prices-collection-item__prices">
                                                    <div class="prices-collection-item__price">from ${{$price1->price}}/hour</div>
                                                </div>
                                                <div class="prices-collection-item__features">
                                                    <div class="prices-collection-item__btn-more">
                                                        <button type="button" class="btn-more" data-toggle="collapse" data-target="#collapsePrice1" aria-expanded="false" aria-controls="collapsePrice1">More</button>
                                                    </div>
                                                    <div class="collapse prices-collection-item-features" id="collapsePrice1">
                                                        <div class="prices-collection-item-features__title">What's included?</div>
                                                        <ul class="prices-collection-item-features__list">
                                                            <li class="prices-collection-item-features__item">2 Professional Movers</li>
                                                            <li class="prices-collection-item-features__item">Clean 18' Box Truck</li>
                                                            <li class="prices-collection-item-features__item">Wrapping and Protection of All Furniture</li>
                                                            <li class="prices-collection-item-features__item">Miles / Gas / Tolls / Taxes</li>
                                                            <li class="prices-collection-item-features__item">Disassembling / Reassembling of Furniture</li>
                                                            <li class="prices-collection-item-features__item">Additional Pick up / Drop off</li>
                                                            <li class="prices-collection-item-features__item">Doors, Walls and Floor Protection</li>
                                                            <li class="prices-collection-item-features__item">Packing / Unpacking</li>
                                                            <li class="prices-collection-item-features__item">Basic Insurance</li>
                                                            <li class="prices-collection-item-features__item">Dollies / Tools / Straps</li>
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
                                                <h3 class="prices-collection-item__title">3 movers</h3>
                                                <div class="prices-collection-item__description">Studio/1 bedroom apartment</div>
                                                <div class="prices-collection-item__prices">
                                                    <div class="prices-collection-item__price">from ${{$price2->price}}/hour</div>
                                                </div>
                                                <div class="prices-collection-item__features">
                                                    <div class="prices-collection-item__btn-more">
                                                        <button type="button" class="btn-more" data-toggle="collapse" data-target="#collapsePrice2" aria-expanded="false" aria-controls="collapsePrice2">More</button>
                                                    </div>
                                                    <div class="collapse prices-collection-item-features" id="collapsePrice2">
                                                        <div class="prices-collection-item-features__title">What's included?</div>
                                                        <ul class="prices-collection-item-features__list">
                                                            <li class="prices-collection-item-features__item">3 Professional Movers</li>
                                                            <li class="prices-collection-item-features__item">Clean 20' Box Truck</li>
                                                            <li class="prices-collection-item-features__item">Wrapping and Protection of All Furniture</li>
                                                            <li class="prices-collection-item-features__item">Miles / Gas / Tolls / Taxes</li>
                                                            <li class="prices-collection-item-features__item">Disassembling / Reassembling of Furniture</li>
                                                            <li class="prices-collection-item-features__item">Additional Pick up / Drop off</li>
                                                            <li class="prices-collection-item-features__item">Doors, Walls and Floor Protection</li>
                                                            <li class="prices-collection-item-features__item">Packing / Unpacking</li>
                                                            <li class="prices-collection-item-features__item">Basic Insurance</li>
                                                            <li class="prices-collection-item-features__item">Dollies / Tools / Straps</li>
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
                                                <h3 class="prices-collection-item__title">4 movers and more</h3>
                                                <div class="prices-collection-item__description">Studio/1 bedroom apartment</div>
                                                <div class="prices-collection-item__prices">
                                                    <div class="prices-collection-item__price">from ${{$price3->price}}/hour</div>
                                                </div>
                                                <div class="prices-collection-item__features">
                                                    <div class="prices-collection-item__btn-more">
                                                        <button type="button" class="btn-more" data-toggle="collapse" data-target="#collapsePrice3" aria-expanded="false" aria-controls="collapsePrice3">More</button>
                                                    </div>
                                                    <div class="collapse prices-collection-item-features" id="collapsePrice3">
                                                        <div class="prices-collection-item-features__title">What's included?</div>
                                                        <ul class="prices-collection-item-features__list">
                                                            <li class="prices-collection-item-features__item">4 Professional Movers</li>
                                                            <li class="prices-collection-item-features__item">Clean 26' Box Truck</li>
                                                            <li class="prices-collection-item-features__item">Wrapping and Protection of All Furniture</li>
                                                            <li class="prices-collection-item-features__item">Miles / Gas / Tolls / Taxes</li>
                                                            <li class="prices-collection-item-features__item">Disassembling / Reassembling of Furniture</li>
                                                            <li class="prices-collection-item-features__item">Additional Pick up / Drop off</li>
                                                            <li class="prices-collection-item-features__item">Doors, Walls and Floor Protection</li>
                                                            <li class="prices-collection-item-features__item">Packing / Unpacking</li>
                                                            <li class="prices-collection-item-features__item">Basic Insurance</li>
                                                            <li class="prices-collection-item-features__item">Dollies / Tools / Straps</li>
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
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="prices-storage" role="tabpanel" aria-labelledby="prices-storage-tab">...</div>
            <div class="tab-pane fade" id="prices-services" role="tabpanel" aria-labelledby="prices-services-tab">...</div> -->
        </div>
    </div>
    <div class="section__button">
        <a href="https://oncueapp.com/flash-moving" class="btn-simple btn-simple--medium">Get free Estimate</a>
    </div>
    <br>
    <br>
    <br>
    <section class="section">
        <div class="container">
            <h2 class="section__title section__title--uppercase">Flash Moving Reviews</h2>
        </div>
        <div class="section__collection">
            <div id="carouselReviews" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselReviews" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselReviews" data-slide-to="1"></li>
                    <li data-target="#carouselReviews" data-slide-to="2"></li>
                    <li data-target="#carouselReviews" data-slide-to="3"></li>
                    <li data-target="#carouselReviews" data-slide-to="4"></li>
                </ol>
                <div class="container">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="review-item">
                                <div class="review-item__preview">
                                    <img src="{{asset('images/reviews/o_1.jpg')}}" alt="Karina Demurchyan" class="review-item__img">
                                </div>
                                <div class="review-item__message">We needed to move a few couches and furniture between floors - Flash Movers did a great job and very efficiently. Reasonably priced, easy to communicate with, very professional and friendly. Would absolutely hire them again and highly recommend to friends, family and my real estate clients. A+</div>
                                <div class="review-item__name">Karina Demurchyan</div>
                                <div class="review-item__from">Review on <a href="#" target="_blank">yelp.com</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-item">
                                <div class="review-item__preview">
                                    <img src="{{asset('images/reviews/c1b53212-f05e-4492-b.jpg')}}" alt="Nour" class="review-item__img">
                                </div>
                                <div class="review-item__message">This is the best moving company I have ever used. Philip and his partner are excellent. Their professionalism and integrity are imcomparable. I plan on using them for every one of my moves if possible. This is the first time I see so much precision and care from movers services. I highly recommend this company for your moves. Great deal as well for the service you are getting. Thumbs up!</div>
                                <div class="review-item__name">Nour</div>
                                <div class="review-item__from">Review on <a href="#" target="_blank">yelp.com</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-item">
                                <div class="review-item__preview">
                                    <img src="{{asset('images/reviews/a76fde3a-03fb-4903-b.jpg')}}" alt="Alia" class="review-item__img">
                                </div>
                                <div class="review-item__message">Flash Movers are Wonderful. These guys are very professional, strong, and extremely accommodating. They did a top-notch job on our long distance move from Boston. And I highly recommend them to everyone!</div>
                                <div class="review-item__name">Alia</div>
                                <div class="review-item__from">Review on <a href="#" target="_blank">yelp.com</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-item">
                                <div class="review-item__preview">
                                    <img src="{{asset('images/reviews/o_2.jpg')}}" alt="Erica" class="review-item__img">
                                </div>
                                <div class="review-item__message">Enter Flash Moving Company, a great moving operation that I have used twice now. They are honest. trustworthy, work quickly, and absolutely nothing has been broken yet. Everything that is wrong with movers they do correctly. If only I had found them years ago... I will continue to hire them as I have a commercial move coming up early in the spring.</div>
                                <div class="review-item__name">Erica</div>
                                <div class="review-item__from">Review on <a href="#" target="_blank">yelp.com</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-item">
                                <div class="review-item__preview">
                                    <img src="{{asset('images/reviews/o_4.jpg')}}" alt="Alex" class="review-item__img">
                                </div>
                                <div class="review-item__message">Flash Movers moved us into our new home yesterday and they were totally helpful, courteous, speedy, friendly, and EFFICIENT at every step of the way. We have TONS of stuff that's really delicate-- none of which was harmed whatsoever-- so I appreciate their hard work very much. And get this: we had budgeted ~$550 for our move, but they came in way under budget even though we extensively used services of theirs we didn't think that we would need. Highly highly recommend these guys.</div>
                                <div class="review-item__name">Alex</div>
                                <div class="review-item__from">Review on <a href="#" target="_blank">yelp.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselReviews" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
        c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                    </svg>
                </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselReviews" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                        <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
        c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
        "/>
                    </svg>
                </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @include('partials/companies')
        </div>
    </section>
    @yield('content-faq')

    <section class="section">
        <div class="container">
            <div class="newlp-block-grey">
                @yield('content-list-2')
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Flash Movers VS Other Ways</h2>
            </div>
            <div class="tcontainer">
                <div class="t-col_10">
                    <div class="t614__mobile">
                    <div class="t614__wrapper">
                    <div class="t614__header">
                    <div class="t614__left" style="min-width: 260px;width: 260px;">
                        <div class="t614__title t614__header_title t-name t-name_xs" style="font-size:22px;" field="title">Features</div>          </div>
                                <div class="t614__col t614__width_33 t-align_center" style="border-color: #8c8c8c;">
                        <div class="t614__title t614__header_title t-name t-name_xs" style="font-size:22px;" field="title2"><div style="color:#db4623;" data-customstyle="yes"><strong>Flash Movers</strong></div></div>
                    </div>
                                        <div class="t614__col t614__width_33 t-align_center" style="border-color: #8c8c8c;">
                        <div class="t614__title t614__header_title t-name t-name_xs" style="font-size:22px;" field="title3"><div style="color:#a4a4a4;" data-customstyle="yes">Do It YourSelf</div></div>
                    </div>
                                        <div class="t614__col t614__width_33 t-align_center" style="border-color: #8c8c8c;">
                        <div class="t614__title t614__header_title t-name t-name_xs" style="font-size:22px;" field="title4"><div style="color:#a4a4a4;" data-customstyle="yes">VAN Lines</div></div>
                    </div>
                                        </div>

                    <div class="t614__body" style="border-radius: 8px;">
                    <div class="t614__middle">
                        <div class="t614__middle_item " style="background-color: #efefef;">
                        <div class="t614__left t-valign_middle" style="min-width: 260px;width: 260px;">
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title__1485805746242">Same Day Delivery</div>              </div>
                                        <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title2__1485805746242">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title3__1485805746242">
                                                <div style="font-size:20px;" data-customstyle="yes">Maybe</div>
                                            </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title4__1485805746242">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    </div>
                                                        <div class="t614__middle_item t614__middle_item-secondchild" style="background-color:#fff ;">
                        <div class="t614__left t-valign_middle" style="min-width: 260px;width: 260px;">
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title__1485805780697">Affordable Price / Flat Rate</div>              </div>
                                        <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title2__1485805780697">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title3__1485805780697">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title4__1485805780697">
                                                <span style="font-size: 20px;">Maybe</span>
                                            </div>
                        </div>
                                                    </div>
                                                        <div class="t614__middle_item " style="background-color: #efefef;">
                        <div class="t614__left t-valign_middle" style="min-width: 260px;width: 260px;">
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title__1485818956543">Same Professional Team</div>              </div>
                                        <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title2__1485818956543">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title3__1485818956543">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title4__1485818956543">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    </div>
                                                        <div class="t614__middle_item t614__middle_item-secondchild" style="background-color:#fff ;">
                        <div class="t614__left t-valign_middle" style="min-width: 260px;width: 260px;">
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title__1485818976579">Highest level of protection</div>              </div>
                                        <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title2__1485818976579">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title3__1485818976579">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title4__1485818976579">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    </div>
                                                        <div class="t614__middle_item " style="background-color: #efefef;">
                        <div class="t614__left t-valign_middle" style="min-width: 260px;width: 260px;">
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title__1485824433720">Short-Term Storage</div>              </div>
                                        <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title2__1485824433720">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
                                    </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title3__1485824433720">
                                                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
                                    <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
                                </g>
                                </svg>
                                                                </div>
                        </div>
                                                    <div class="t614__col t614__width_33 t-align_center t-valign_middle" style="border-color: #8c8c8c;">
                            
                            <div class="t614__title t614__middle_title t-descr t-descr_xs" style="" field="li_title4__1485824433720">
                                                <span style="font-size: 20px;">Maybe</span>
                                            </div>
                        </div>
                                                    </div>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="section">
        <div class="container text-center">
        <iframe src="https://oncueapp.com/flash-moving?short=1&iframe=1" class="mob-width" width=600 height=510></iframe>        
        </div>
    </section>
@stop



