@section('title', 'Moving Prices | Flash Moving Company')
@section('dscr', 'Flat Rates for Long Distance and Hourly Rates for Local Moving. Find all information on how Flash Moving Company charge their clients. Make sure it is transparent and without any hidden fees.')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')
@section('preload')
<link rel="preload" href="/images/hero/IMG_7938.jpg" as="image">
<link rel="canonical" href="https://www.flashmoving.net/prices" /> 
@stop
@section('content')

    {{-- Hero --}}
    <section class="hero mb-5">
        <div class="hero__preview">
            <img src="/images/hero/IMG_7938.jpg" alt="Flash Moving prices" class="hero__img hero__img--brightness-high">
        </div>
        <div class="hero__wrapper-content">
            <div class="hero__container">
                <div class="hero__content">
                    <div class="hero__row">
                        <div class="col-md-7">
                            <div class="hero__title hero__title--static">
                                <div class="hero-title">
                                    <div class="hero-title__simple">Moving Prices</div>
                                </div>
                            </div>
                            <div class="hero__description hero__description--big">Without any hidden fees and extra chargers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Prices country --}}
    {{-- <div class="tabs container">
        <div class="nav mb-3 tabs-nav" id="prices-nav-tab" role="tablist">
            <a class="tabs-nav__item tabs-nav__link active" id="prices-local-tab" data-toggle="tab" href="#prices-local" role="tab" aria-controls="nav-local" aria-selected="true"><span class="tabs-nav__text">Local Moving</span></a>
            <a class="tabs-nav__item tabs-nav__link" id="prices-distance-tab" data-toggle="tab" href="#prices-distance" role="tab" aria-controls="nav-distance" aria-selected="false"><span class="tabs-nav__text">Long distance</span></a>
            <a class="tabs-nav__item tabs-nav__link" id="prices-storage-tab" data-toggle="tab" href="#prices-storage" role="tab" aria-controls="nav-storage" aria-selected="false"><span class="tabs-nav__text">Storage</span></a>
            <a class="tabs-nav__item tabs-nav__link" id="prices-services-tab" data-toggle="tab" href="#prices-services" role="tab" aria-controls="nav-services" aria-selected="false"><span class="tabs-nav__text">Additional Sevices</span></a>
        </div>
        <div class="tab-content" id="prices-nav-tabContent" >
            <div class="tab-pane fade show active" style="opacity: 1;" id="prices-local"  role="tabpanel" aria-labelledby="prices-local-tab">
                <div class="section">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title section-title--upper">Local moving prices</h2>
                        </div>

                        <div class="section__collection">
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
                                                    <a class="btn-simple" href="https://oncueapp.com/flash-moving">Book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 prices-collection__item prices-collection__item--wide">
                                            <div class="prices-collection-item prices-collection-item--big">
                                                <h3 class="prices-collection-item__title">3 movers</h3>
                                                <div class="prices-collection-item__description">2 bedroom apartment</div>
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
                                                    <a class="btn-simple" href="https://oncueapp.com/flash-moving">Book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 prices-collection__item prices-collection__item--narrow">
                                            <div class="prices-collection-item">
                                                <h3 class="prices-collection-item__title">4 movers & more</h3>
                                                <div class="prices-collection-item__description">3-4+ bedroom house</div>
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
                                                    <a class="btn-simple" href="https://oncueapp.com/flash-moving">Book now</a>
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
            <div class="tab-pane fade" style="opacity: 1;" id="prices-distance" role="tabpanel" aria-labelledby="prices-distance-tab">
                <div class="section">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title section-title--upper">Long distance flat rate prices</h2>
                        </div>
                        <div class="prices-country-collection">
                            <div class="prices-country-collection__list">
                                <div class="row">
                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/New_York.jpg')}}" alt="Local Moving" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">New York</div>
                                                <div class="prices-country-collection-item__price">From $850</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/Philadelphia.jpg')}}" alt="Philadelphia" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">Philadelphia</div>
                                                <div class="prices-country-collection-item__price">From $1100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/Washington.jpg')}}" alt="Washington DC" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">Washington DC</div>
                                                <div class="prices-country-collection-item__price">From $1200</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/Chicago.jpg')}}" alt="Chicago" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">Chicago</div>
                                                <div class="prices-country-collection-item__price">From $3100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/Miami.jpg')}}" alt="Florida" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">Florida</div>
                                                <div class="prices-country-collection-item__price">From $5000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices-country-collection__item">
                                        <div class="prices-country-collection-item">
                                            <div class="prices-country-collection-item__background">
                                                <div class="prices-country-collection-item__preview">
                                                    <img src="{{asset('images/prices/Atlanta.jpg')}}" alt="Other cities" class="prices-country-collection-item__img">
                                                </div>
                                            </div>
                                            <div class="prices-country-collection-item__content">
                                                <div class="prices-country-collection-item__title">Other cities</div>
                                                <div class="prices-country-collection-item__price">By request</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__button">
                            <a href="https://oncueapp.com/flash-moving" class="btn-simple btn-simple--medium">Get free Estimate</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" style="opacity: 1;" id="prices-storage" role="tabpanel" aria-labelledby="prices-storage-tab">
                <div class="section mb-5">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title section-title--upper">Storage solution</h2>
                        </div>
                        <div class="prices-list-collection">
                            <div class="prices-list-collection__list col-xl-10 m-auto">
                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Overnight storage</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">From $150</div>
                                                <div class="prices-list-collection-item__price-period">per night/per truck</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>In case you have to move out in one day, but are not able to move into your new residence until the next day, we offer low cost Overnight On-Truck Storage. The truck remains locked and stationary in our digitally monitored parking lot. Once you get your keys, your possessions will be safely delivered to your new apartment or home.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Short-term storage</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">From $100</div>
                                                <div class="prices-list-collection-item__price-period">Per month</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>Are you looking for a short-term storage to protect your belongings while renovating your new home? We offer storage facilities for up to 6 months.</p>
                                                <p>All of your goods will be custom wrapped, loaded into our truck, transported to our warehouse and transferred from our truck directly to the storage.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Long-term storage</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">By request</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>Are you temporarily relocating out of state or overseas, or downsizing to a new home? Get <strong>First Month Free</strong> for your <strong>Long-Term Storage</strong>.</p>
                                                <p>All our storage facilities are clean and climate controlled, equipped with top-notch video security cameras and guards, and have fire sprinklers installed for safety.</p>
                                                <p><span class="prices-list-collection-item__content--danger">First month free</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__button">
                            <a href="https://oncueapp.com/flash-moving" class="btn-simple btn-simple--medium">Book storage</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" style="opacity: 1;" id="prices-services" role="tabpanel" aria-labelledby="prices-services-tab">
                <div class="section mb-5">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title section-title--upper">Additional services</h2>
                        </div>
                        <div class="prices-list-collection">
                            <div class="prices-list-collection__list col-xl-10 m-auto">
                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Piano and bulky items moving</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">From $160</div>
                                                <div class="prices-list-collection-item__price-period">depending on type of an item</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>We are equipped and properly trained with the best practices for moving pianos and bulky items.
                                                    Our number one goal throughout the entire process is to keep your piano protected as well as to keep our movers safe and secured performing such a tricky and solid job.</p>
                                                <p>That's why we always use special <strong>piano boards</strong>, <strong>moving straps</strong>, <strong>dollies</strong> and <strong>soft moving blankets</strong> to avoid any possible damages and scratches. And we book <strong>3 or 4 movers crew</strong> for fulfilling bulky stuff moves.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Hoisting service</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">From $40</div>
                                                <div class="prices-list-collection-item__price-period">plus $20 per item/per flight</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>Since the beauty created by our ancestors with its astonishing but tiny staircases doesn't match with moving your favorite King size Bed down from the third floor, the solution is <strong>hand-hoisting service</strong>.
                                                    <br>It is a delicate procedure that requires training and should be attempted by at least 3 professional movers. There is <strong>$40 service fee</strong> and <strong>$20 charge per flight/per item</strong> for hoisting.
                                                    We will carefully move your furniture up through the window or over a balcony. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Parking permits</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">From $120</div>
                                                <div class="prices-list-collection-item__price-period">depending on the area and moving date</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>If you don't have available parking spot, loading dock or drive way we recommend you to take a parking permit in the City Hall. Parking permits are needed for Boston area such as North End, Charlestown, Back Bay, and for a one way street with parking slots on both sides of the road.</p>
                                                <p>We have 20' and 26' box trucks and parking a truck in front of the building or outside the streetoccupies 2 or 3 parking spots.</p>
                                                <p>If you don't have a time or just busy during the day we would be more than happy to take care of this. We can order the permits for you, but there will be an extra charge.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices-list-collection__item">
                                    <div class="prices-list-collection-item row">
                                        <div class="col-md-4 order-0">
                                            <h3 class="prices-list-collection-item__title">Renting moving crates</h3>
                                        </div>
                                        <div class="col-md-3 order-md-2">
                                            <div class="prices-list-collection-item__price">
                                                <div class="prices-list-collection-item__price-value">By request</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 order-md-1">
                                            <div class="prices-list-collection-item__content">
                                                <p>Save time and money. No tape, no driving to HomeDepot or Lowels, no headache with boxes after move. We deliver, you pack and unload, we take it back. Easy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__button">
                            <a href="https://oncueapp.com/flash-moving" class="btn-simple btn-simple--medium">Request free Estimate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Prices FAQ --}}
    <section class="section mb-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title section-title--upper">Prices F.A.Q.</h2>
                <div class="section-description">If you didn't find your question, please,<br>
                    don't hesitate to call us: +1 857 241 8778</div>
            </div>
            <div class="accordion-content theme-white" id="accordionPricesFaq">
                <div class="accordion-content__list row">
                    {{--1--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingHourlyRate" data-toggle="collapse" data-target="#collapseHourlyRate" aria-expanded="true" aria-controls="collapseHourlyRate">
                                Hourly rate
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseHourlyRate" aria-labelledby="headingHourlyRate" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    Hourly rate includes professional movers, clean and fully equipped moving truck, moving blankets/pads, disassembling/reassembling of furniture, tolls, gas, mileage, taxes, and basic insurance<br>.<br> <strong>All wrapping supplies will be charged additionally based on the actual usage. </strong><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--2--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingLaborTime" data-toggle="collapse" data-target="#collapseLaborTime" aria-expanded="true" aria-controls="collapseLaborTime">
                                Labor time
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseLaborTime" aria-labelledby="headingLaborTime" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    <img src="{{asset('images/prices/Laborexplainded.jpg')}}" alt="Flash Moving Prices">
                                    <strong>Total Moving Time = Labor Time + Travel Time. </strong><br><br>Labor Time starts once movers arrive to your origin address and ends when movers finish unloading at the destination address. Lunch breaks will be deducted of your Total Moving Time.<br><br><strong>Total moving time can vary in case of undisclosed or unpredicted circumstances.</strong><strong></strong><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--3--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingTravelTime" data-toggle="collapse" data-target="#collapseTravelTime" aria-expanded="true" aria-controls="collapseTravelTime">
                                Travel time
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseTravelTime" aria-labelledby="headingTravelTime" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    <img src="{{asset('images/prices/Laborexplainded.jpg')}}" alt="Flash Moving Prices">
                                    <strong>Travel time</strong> is the <strong>FIXED TIME</strong> which our crew spent to get from our parking to your location and back to our parking from your last destination. This fixed time will be added at the end of the job additionally to the actual time of the move. <br><br> Up to 1 hour Travel Time is applied to all jobs in Greater Boston area and minimum 30 min. (15 min for our movers to get to your address from our parking plus 15 min to get back when the move is finished). <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--4--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingCharge" data-toggle="collapse" data-target="#collapseCharge" aria-expanded="true" aria-controls="collapseCharge">
                                Minimum charge
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseCharge" aria-labelledby="headingCharge" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    We have 3 hours minimum charge policy which includes travel time, in case your move takes less then 3 hours of the Total Time. Then our Rates are hourly based with 15 min. increment charge policy. <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--5--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingPayment" data-toggle="collapse" data-target="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment">
                                Payment options
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapsePayment" aria-labelledby="headingPayment" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    For payments we accept <strong>cash, money order, certified check and all kind of cards</strong>. <br>For <strong>credit/debit card </strong>payments there will be a<strong> 3% service fee</strong>. The card should be presented at the time of payment and the name on the card should be the same as on the bill of landing.<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--6--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingDiscount" data-toggle="collapse" data-target="#collapseDiscount" aria-expanded="true" aria-controls="collapseDiscount">
                                Cash discount
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseDiscount" aria-labelledby="headingDiscount" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    If you are our <strong>NEW CLIEN</strong> you will get <strong>5% DISCOUNT</strong> as a <strong>"Welcome Bonus"</strong> (applies for labor time+travel time only). <br><br> If you are our <strong>REPEAT CLIENT</strong>, please, contact our manager during working hours (9AM - 6PM) via the phone at <strong>857.241.8778</strong> or 24/7 via the email at <strong>info@flashmoving.net </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--7--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingDeposit" data-toggle="collapse" data-target="#collapseDeposit" aria-expanded="true" aria-controls="collapseDeposit">
                                Deposit
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseDeposit" aria-labelledby="headingDeposit" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    In order to reserve and confirm your moving date, truck, and movers we require a deposit. This deposit will be deducted from your balance in the end of the move. Deposit is non-refundable in case of cancellation of the job. <br><br> The remaining balance is paid in full (cash, certified check or debit/credit cards) upon the end of the move according the actual time plus travel time.<br><br>After confirming the job our manager will send you an invoice. You could pay with Visa, MasterCard, American Express and Discover <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--8--}}
                    <div class="accordion-content__item col-md-6">
                        <div class="accordion-content-item">
                            <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingReschedule" data-toggle="collapse" data-target="#collapseReschedule" aria-expanded="true" aria-controls="collapseReschedule">
                                Reschedule / Cancellation
                                <div class="accordion-content-item__button">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                </div>
                            </div>
                            <div class="collapse accordion-content-item__body" id="collapseReschedule" aria-labelledby="headingReschedule" data-parent="#accordionPricesFaq">
                                <div class="accordion-content-item__text">
                                    Each rescheduling with less than 5 business days notice is subject to a $150 fee.<br><br>The deposit will not be refunded in the case of cancellation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="section advantages mb-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title section-title--upper advantages__title">Why people choose Flash Movers</h2>
            </div>
            <div class="row advantages__list">
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100.75 100.75" style="enable-background:new 0 0 100.75 100.75;" xml:space="preserve"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/>
                                <g>
                                    <path d="M18.22,70.702c0,5.032,4.094,9.127,9.127,9.127s9.127-4.095,9.127-9.127s-4.094-9.127-9.127-9.127   S18.22,65.669,18.22,70.702z M33.474,70.702c0,3.378-2.749,6.127-6.127,6.127s-6.127-2.749-6.127-6.127s2.749-6.127,6.127-6.127   S33.474,67.324,33.474,70.702z"/>
                                    <path d="M90.219,36.618c-0.618-0.551-1.565-0.498-2.118,0.12L66.314,61.141L55.098,49.925c-0.586-0.586-1.535-0.586-2.121,0   s-0.586,1.535,0,2.121l12.339,12.338c0.282,0.282,0.663,0.439,1.061,0.439c0.014,0,0.028,0,0.042-0.001   c0.412-0.012,0.802-0.192,1.077-0.5L90.34,38.735C90.891,38.118,90.837,37.169,90.219,36.618z"/>
                                    <path d="M66.894,68.574c-0.829,0-1.5,0.672-1.5,1.5v14.927H12.28v-70h53.114v31.427c0,0.828,0.671,1.5,1.5,1.5s1.5-0.672,1.5-1.5   V13.501c0-0.828-0.671-1.5-1.5-1.5H10.78c-0.829,0-1.5,0.672-1.5,1.5v73c0,0.828,0.671,1.5,1.5,1.5h56.114   c0.829,0,1.5-0.672,1.5-1.5V70.074C68.394,69.246,67.723,68.574,66.894,68.574z"/>
                                    <path d="M49.36,32.226c0.829,0,1.5-0.672,1.5-1.5s-0.671-1.5-1.5-1.5H19.224c-0.829,0-1.5,0.672-1.5,1.5s0.671,1.5,1.5,1.5H49.36z"/>
                                    <path d="M51.229,44.07c0-0.828-0.671-1.5-1.5-1.5H19.601c-0.829,0-1.5,0.672-1.5,1.5s0.671,1.5,1.5,1.5h30.128   C50.558,45.57,51.229,44.898,51.229,44.07z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="advantages-item__title">Fully Licensed and Insured</div>
                        <div class="advantages-item__description">You do not have to worry about anything, everything is under our control</div>
                    </div>
                </div>
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100.353 100.353" style="enable-background:new 0 0 100.353 100.353;" xml:space="preserve"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/>
                                <g>
                                    <path style="fill:#231F20;" d="M61.77,51.074l7.802-7.604c0.75-0.727,1.018-1.797,0.697-2.794c-0.321-0.999-1.166-1.716-2.208-1.87   l-10.793-1.564l-4.821-9.781c-0.467-0.937-1.405-1.518-2.449-1.518c-0.002,0-0.005,0.001-0.008,0.001   c-1.043,0.002-1.978,0.586-2.44,1.523l-4.82,9.774l-10.79,1.565c-1.044,0.155-1.891,0.877-2.21,1.883   c-0.317,0.998-0.044,2.066,0.701,2.777l7.803,7.606l-1.849,10.794c-0.174,1.027,0.238,2.05,1.077,2.666   c0.48,0.353,1.044,0.532,1.612,0.532c0.42,0,0.842-0.099,1.232-0.297l9.92-5.021l9.418,4.95c0.931,0.491,2.036,0.411,2.885-0.205   c0.848-0.615,1.265-1.641,1.088-2.675L61.77,51.074z M50.239,28.793L50.239,28.793L50.239,28.793L50.239,28.793z M58.68,50.804   l1.888,10.991l-9.632-5.062c-0.43-0.226-0.942-0.23-1.375-0.011L39.43,61.849l1.892-11.046c0.083-0.486-0.078-0.982-0.432-1.327   l-7.979-7.779l11.029-1.6c0.489-0.071,0.912-0.378,1.13-0.821l4.929-9.994l4.926,9.994c0.218,0.443,0.641,0.751,1.13,0.821   l11.039,1.6l-7.982,7.779C58.758,49.821,58.596,50.318,58.68,50.804z"/>
                                    <path style="fill:#231F20;" d="M97.471,56.781c-0.274-0.856-0.997-1.471-1.896-1.606l-7.122-1.031l-3.185-6.457   c-0.399-0.803-1.204-1.301-2.1-1.301c-0.002,0-0.004,0-0.006,0c-0.896,0.002-1.698,0.502-2.093,1.306l-3.182,6.452l-7.128,1.032   c-0.891,0.135-1.613,0.752-1.886,1.609c-0.271,0.854-0.039,1.77,0.599,2.384l5.151,5.024l-1.22,7.121   c-0.151,0.878,0.198,1.751,0.912,2.28c0.413,0.306,0.899,0.462,1.391,0.462c0.36,0,0.722-0.084,1.06-0.253l6.558-3.319l6.213,3.269   c0.801,0.423,1.752,0.351,2.481-0.184c0.726-0.532,1.077-1.412,0.919-2.282l-1.214-7.094l5.148-5.021   C97.515,58.549,97.744,57.632,97.471,56.781z M83.761,49.017L83.761,49.017C83.761,49.017,83.761,49.018,83.761,49.017   L83.761,49.017z M89.065,62.595c-0.353,0.345-0.514,0.841-0.431,1.327l1.122,6.556l-5.72-3.009   c-0.43-0.228-0.943-0.231-1.375-0.012l-6.079,3.077l1.133-6.612c0.083-0.486-0.078-0.982-0.431-1.327l-4.761-4.644l6.577-0.953   c0.489-0.07,0.912-0.378,1.13-0.821l2.941-5.964l2.941,5.964c0.218,0.443,0.641,0.751,1.13,0.821l6.583,0.953L89.065,62.595z"/>
                                    <path style="fill:#231F20;" d="M29.232,55.174l-7.122-1.031l-3.185-6.457c-0.399-0.803-1.204-1.301-2.1-1.301   c-0.002,0-0.004,0-0.006,0c-0.896,0.002-1.699,0.503-2.094,1.308l-3.181,6.45l-7.128,1.032c-0.892,0.136-1.616,0.753-1.889,1.611   c-0.271,0.854-0.039,1.769,0.598,2.382l5.152,5.024l-1.217,7.12c-0.152,0.878,0.198,1.752,0.912,2.281   c0.412,0.306,0.899,0.462,1.391,0.462c0.359,0,0.722-0.084,1.059-0.254l6.556-3.318l6.216,3.269   c0.799,0.421,1.747,0.354,2.475-0.18c0.727-0.529,1.081-1.408,0.926-2.286l-1.214-7.094l5.147-5.021   c0.642-0.622,0.872-1.537,0.599-2.39C30.853,55.926,30.131,55.31,29.232,55.174z M22.722,62.595   c-0.353,0.345-0.514,0.841-0.431,1.327l1.122,6.556l-5.723-3.01c-0.431-0.226-0.943-0.231-1.375-0.01l-6.076,3.075l1.13-6.611   c0.083-0.486-0.078-0.982-0.431-1.327l-4.761-4.644l6.58-0.953c0.489-0.07,0.912-0.378,1.13-0.821l2.941-5.964l2.941,5.964   c0.218,0.443,0.641,0.751,1.13,0.821l6.583,0.953L22.722,62.595z"/>
                                </g>
</svg>
                        </div>
                        <div class="advantages-item__title">Our Clients Love Us</div>
                        <div class="advantages-item__description">We have over +100 5-star reviews on Social Media in less than a year. Every 3rd customer is a repeat customer</div>
                    </div>
                </div>
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/><title>Artboard 6</title><path d="M84.84,75.49,56.25,45.87,73.74,28.38l3.18,3.18A1.5,1.5,0,0,0,78,32h.17a1.5,1.5,0,0,0,1.1-.7l6.52-10.43A1.5,1.5,0,0,0,85.56,19L81,14.44a1.5,1.5,0,0,0-1.86-.21L68.71,20.75a1.5,1.5,0,0,0-.27,2.33l3.18,3.18L54.17,43.71,40.85,29.92A15.33,15.33,0,0,0,22.75,9a1.5,1.5,0,0,0-.68,2.49L28.31,18l-1.63,5.74-5.76,1.45-6.23-6.45a1.5,1.5,0,0,0-2.51.6,15.4,15.4,0,0,0,3.63,15.21,15.24,15.24,0,0,0,16.59,3.6L45.34,51.54l-8,8-2.14-2.14a1.5,1.5,0,0,0-2.12,0L12.44,78a1.5,1.5,0,0,0,0,2.12l6.4,6.4a1.5,1.5,0,0,0,2.12,0L41.56,66a1.5,1.5,0,0,0,0-2.12L39.42,61.7l8-8,29,30a5.84,5.84,0,0,0,4.14,1.8h.1a5.84,5.84,0,0,0,4.1-1.67A5.92,5.92,0,0,0,84.84,75.49ZM79.72,17.4l2.88,2.88-4.89,7.82-5.81-5.81Zm-59.82,66L15.62,79.1,34.1,60.62l4.28,4.28Zm62.72-1.7a2.9,2.9,0,0,1-2.05.82,2.86,2.86,0,0,1-2-.88L33.83,35.3A1.5,1.5,0,0,0,32.1,35,12.25,12.25,0,0,1,18,32.45a12.39,12.39,0,0,1-3.43-9.56l4.83,5a1.5,1.5,0,0,0,1.45.41l7.44-1.87a1.5,1.5,0,0,0,1.08-1l2.1-7.4a1.5,1.5,0,0,0-.36-1.45l-4.84-5a12.34,12.34,0,0,1,11.5,18A1.5,1.5,0,0,0,38,31.26L82.68,77.57A2.92,2.92,0,0,1,82.62,81.68Z"/></svg>
                        </div>
                        <div class="advantages-item__title">Assembling/Reassembling Furniture</div>
                        <div class="advantages-item__description">Every crew member is a part of a professionally trained team. We use special tools to perform fast and effective job</div>
                    </div>
                </div>
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100.25 100.25" style="enable-background:new 0 0 100.25 100.25;" xml:space="preserve"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/>
                                <g>
                                    <path d="M50.089,53.806c-20.727,0-37.589,16.861-37.589,37.587c0,0.828,0.672,1.5,1.5,1.5h58.901   c0.045,0.004,0.089,0.014,0.135,0.014s0.09-0.01,0.135-0.014h12.997c0.828,0,1.5-0.672,1.5-1.5   C87.669,70.667,70.811,53.806,50.089,53.806z M28,64.809c3.226-2.685,6.944-4.794,11-6.171v14.755c0,0.828,0.672,1.5,1.5,1.5h19   c0.828,0,1.5-0.672,1.5-1.5V58.58c3.856,1.286,7.415,3.227,10.536,5.702v25.611H28V64.809z M58,57.728v14.165H42V57.768   c2.596-0.625,5.304-0.962,8.089-0.962C52.811,56.806,55.458,57.131,58,57.728z M25,67.608v22.285h-9.468   C15.902,81.28,19.436,73.473,25,67.608z M74.536,89.893V66.968c5.924,5.932,9.718,13.991,10.101,22.925   C84.637,89.893,74.536,89.893,74.536,89.893z"/>
                                    <path d="M49.456,50.071c11.91,0,21.601-9.687,21.601-21.593c0-11.91-9.69-21.601-21.601-21.601s-21.602,9.69-21.602,21.601   C27.854,40.384,37.545,50.071,49.456,50.071z M49.456,9.877c7.958,0,14.744,5.032,17.395,12.073   c-2.893-1.264-7.939-3.887-11.128-5.625c-0.422-0.229-0.927-0.244-1.359-0.038c-0.074,0.035-7.457,3.526-12.258,5.526l-0.456,0.191   c-3.641,1.522-5.981,2.495-10.457,2.986C32.832,16.397,40.392,9.877,49.456,9.877z M30.877,28.04c5.33-0.512,8-1.624,11.93-3.267   l0.455-0.189c3.995-1.665,9.732-4.339,11.696-5.26c2.48,1.338,10.216,5.453,12.838,6.184c0.157,0.97,0.26,1.957,0.26,2.971   c0,10.252-8.344,18.593-18.601,18.593s-18.602-8.341-18.602-18.593C30.854,28.33,30.873,28.187,30.877,28.04z"/>
                                </g>
</svg>
                        </div>
                        <div class="advantages-item__title">Professional and Young Team</div>
                        <div class="advantages-item__description">Flash Movers are young professionals with 5+ years of experience in moving industry. Only full-time employees. No "contractors" or "one day" laborers</div>
                    </div>
                </div>
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/><title>Artboard 9</title><path d="M71.07,39.27,50.61,24.91a1.5,1.5,0,0,0-1.74,0L28.92,39.28A1.5,1.5,0,0,0,29.8,42H33V69.5A1.5,1.5,0,0,0,34.5,71h31A1.5,1.5,0,0,0,67,69.5V42h3.21a1.5,1.5,0,0,0,.86-2.73ZM64,40.5V68H36V40.5A1.5,1.5,0,0,0,34.5,39h-.05L49.76,28,65.46,39A1.5,1.5,0,0,0,64,40.5Z"/><path d="M43,45.5v12A1.5,1.5,0,0,0,44.5,59h12A1.5,1.5,0,0,0,58,57.5v-12A1.5,1.5,0,0,0,56.5,44h-12A1.5,1.5,0,0,0,43,45.5ZM46,47h9v9H46Z"/><path d="M84.26,21.57a1.5,1.5,0,0,0-.48-1.07,1.52,1.52,0,0,0-1.1-.4C57.91,21.51,51.93,4.74,51.69,4a1.5,1.5,0,0,0-1.42-1h-.54a1.51,1.51,0,0,0-1.42,1c-.24.71-6.24,17.49-31,16.09a1.5,1.5,0,0,0-1.58,1.46c0,.89-.53,21.93,0,29.16C16.87,66,21.63,83.4,48.32,95.86A1.49,1.49,0,0,0,49,96H51a1.49,1.49,0,0,0,.63-.14C78.37,83.4,83.13,66,84.26,50.73,84.79,43.5,84.28,22.46,84.26,21.57Zm-3,28.93C80.2,64.9,75.73,81.2,50.71,93H49.29c-25-11.8-29.49-28.1-30.56-42.49-.44-6-.14-22.26,0-27.33l1.45,0c19,0,27.12-10.75,29.85-15.74,2.79,5.11,11.2,16.27,31.3,15.72C81.41,28.24,81.71,44.53,81.27,50.5Z"/></svg>
                        </div>
                        <div class="advantages-item__title">We Care about Your Stuff</div>
                        <div class="advantages-item__description">We protect your home and furniture with premium quality moving blankets and use special door-jamb and banister protections. You can check out some pictures here</div>
                    </div>
                </div>
                <div class="col-md-4 advantages__item">
                    <div class="advantages-item">
                        <div class="advantages-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100.353 100.352" style="enable-background:new 0 0 100.353 100.352;" xml:space="preserve"><script xmlns="" type="text/javascript" charset="utf-8" id="zm-extension"/>
                                <g>
                                    <path d="M49.982,17.015c-18.555,0-33.65,15.096-33.65,33.65s15.096,33.65,33.65,33.65c18.555,0,33.651-15.096,33.651-33.65   S68.537,17.015,49.982,17.015z M49.982,80.708c-16.566,0-30.044-13.477-30.044-30.043s13.478-30.044,30.044-30.044   c16.566,0,30.043,13.478,30.043,30.044S66.548,80.708,49.982,80.708z"/>
                                    <path d="M58.485,45.198l-7.258,7.258V26.64c0-0.996-0.808-1.803-1.804-1.803s-1.803,0.807-1.803,1.803v30.169   c0,0.119,0.012,0.238,0.036,0.355c0.01,0.051,0.029,0.098,0.044,0.148c0.018,0.063,0.033,0.127,0.059,0.189   c0.025,0.06,0.059,0.114,0.09,0.171c0.025,0.047,0.046,0.095,0.076,0.14c0.132,0.198,0.303,0.368,0.501,0.501   c0.037,0.025,0.077,0.041,0.115,0.062c0.064,0.036,0.126,0.074,0.195,0.103c0.054,0.022,0.111,0.035,0.166,0.052   c0.057,0.017,0.111,0.039,0.17,0.05c0.116,0.023,0.234,0.036,0.352,0.036s0.236-0.012,0.352-0.036   c0.059-0.012,0.114-0.033,0.171-0.051c0.055-0.017,0.111-0.029,0.165-0.051c0.07-0.029,0.134-0.068,0.199-0.105   c0.037-0.021,0.075-0.036,0.111-0.06c0.101-0.067,0.195-0.143,0.279-0.229l10.335-10.335c0.704-0.704,0.704-1.846,0-2.55   C60.331,44.493,59.19,44.493,58.485,45.198z"/>
                                    <path d="M49.983,9.044c-22.95,0-41.621,18.671-41.621,41.622s18.671,41.621,41.621,41.621c22.95,0,41.622-18.671,41.622-41.621   S72.933,9.044,49.983,9.044z M49.983,88.679c-20.961,0-38.015-17.053-38.015-38.014c0-20.961,17.053-38.015,38.015-38.015   s38.014,17.054,38.014,38.015C87.997,71.626,70.944,88.679,49.983,88.679z"/>
                                </g>
</svg>
                        </div>
                        <div class="advantages-item__title">Less than 30-minutes Respond Rate</div>
                        <div class="advantages-item__description">Our managers typically answer your requests within 30 minutes. We are always available during working ours and would also answer your questions 24/7 via email</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Section --}}

    {{-- Section text "We are a part of the family (Reviews)" starts --}}
    <section class="section">
        <div class="container">
            <h2 class="section__title section__title--uppercase">We are a part of the family</h2>
        </div>
        <div class="section__collection">
            <div id="carouselReviews" class="carousel slide carousel-fade" data-ride="carousel">
								<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" display:none;>
										<meta itemprop="itemReviewed" content="Flash Moving Company" />
										<meta itemprop="ratingValue" content="5.0" />
										<meta itemprop="reviewCount" content="60" />
								</div>
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
    {{-- End of Section --}}


    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title section-title--upper">How to start move with us</h2>
            </div>

            <div class="tree-to-start">
                <div class="tree-to-start__list">
                    <div class="tree-to-start__item">
                        <div class="tree-to-start-item">
                            <div class="tree-to-start-item__preview">
                                <div class="tree-to-start-item__icon tree-to-start-item__icon--call"></div>
                            </div>
                            <div class="content">
                                <div class="tree-to-start-item__title">Call us at <span class="tree-to-start-item__text-red">857.241.8778</span></div>
                                <div class="tree-to-start-item__description">Our manager will ask a few questions<br> regarding the move</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-to-start__item">
                        <div class="tree-to-start-item">
                            <div class="tree-to-start-item__preview">
                                <div class="tree-to-start-item__icon tree-to-start-item__icon--calendar"></div>
                            </div>
                            <div class="content">
                                <div class="tree-to-start-item__title">Choose date & time <br> for you move</div>
                                <div class="tree-to-start-item__description">Select a desired moving date and time</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-to-start__item">
                        <div class="tree-to-start-item">
                            <div class="tree-to-start-item__preview">
                                <div class="tree-to-start-item__icon tree-to-start-item__icon--calc"></div>
                            </div>
                            <div class="content">
                                <div class="tree-to-start-item__title">Get your <span class="tree-to-start-item__text-red">free</span> estimate</div>
                                <div class="tree-to-start-item__description">You'll get a free estimate by phone or via e-mail</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-to-start__item">
                        <div class="tree-to-start-item">
                            <div class="tree-to-start-item__preview">
                                <div class="tree-to-start-item__icon tree-to-start-item__icon--delivery"></div>
                            </div>
                            <div class="content">
                                <div class="tree-to-start-item__title">Start your move with us</div>
                                <div class="tree-to-start-item__description">Are you ready? Excellent! We are on our way!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="section__button">
                <a href="https://oncueapp.com/flash-moving" class="btn-simple btn-simple--medium">Get free Estimate</a>
            </div>
        </div>
    </section>
    <br>
    <!--Section Instagram starts-->
    <section class="section">
        <div class="container photo-collection">
          <div id="instafeed" class="row photo-collection__list">
          </div>
        </div>
    </section>
    <!--End of Section -->

@stop


@section('customjs')
    <script>
        // accordion
        $('#accordionPricesFaq').on('show.bs.collapse', function (e) {
            var item = e.target;
            $(item).closest('.accordion-content-item').find('.accordion-content-item__button').addClass('accordion-content-item__button--rotate').addClass('accordion-content-item__button--hover');
        })
        $('#accordionPricesFaq').on('hidden.bs.collapse', function (e) {
            var item = e.target;
            $(item).closest('.accordion-content-item').find('.accordion-content-item__button').removeClass('accordion-content-item__button--rotate').removeClass('accordion-content-item__button--hover');
        })
    </script>
@stop
