@section('title', 'Cambridge, MA Movers | Flash Moving Company')
@section('dscr', 'Cambridge movers for your Local Moving. Get a free estimate for from Flash Moving. One of the best Cambridge moving companies for your move.')
@section('keywords', '')
@section('mainimg', '')

@extends('services._local-moving-area')

@section('hero-title', 'Cambridge Movers')
@section('hero-description', 'Without any hidden fees and extra chargers')
@section('hero-image')
<img src="/images/services/interstate/IMG_7929.jpg" alt="" style="min-height: 550px;" class="hero__img hero__img--brightness-high">
@stop

@section('faqhead')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How much does it cost to move in Cambridge, MA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The Average hoourly rate to move in Cambridge, MA is $90/hour. It includes labor, truck, tolls, gas and wrapping materials."
    }
  }, {
    "@type": "Question",
    "name": "How to get moving permit in Cambridge, MA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To get moving permit in Cambridge, MA simply visit www.cambridgema.gov/traffic/Permits/movingvans and follow all the steps."
    }
  }, {
    "@type": "Question",
    "name": "How long is to move one bedroom apt in Cambridge, MA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To move a One Bedroom apartment in Cambridge, MA takes around 4 hours."
    }
  }, {
    "@type": "Question",
    "name": "How to get packing service for your movign in Cambrdige, MA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Flash Moving provides packing service for your move in Cambridge, MA. Contact us to get details."
    }
  }]
  }
</script>
@stop

@section('content-list')
    <div class="content-blocks__item" >
        <div class="row content-blocks-item">
            <div class="col-lg-6 order-lg-1 content-blocks-item__preview">
                <img src="{{asset('images/services/local/content/IMG_7828.jpg')}}" alt="" class="content-blocks-item__img">
            </div>
            <div class="col-lg-6 order-lg-0 content-blocks-item__body">
                <div class="content-blocks-item__body-inner">
                    <div class="content-blocks-item__header">
                        <h2 class="content-blocks-item__title-primary">Moving to Cambridge MA</h2>
                    </div>
                    <div class="content-blocks-item__text">
                    <p>
                        Do you live in Cambridge Massachusetts or planning to move to Cambridge? Looking for reliable Moving company to handle your move? We are here to help you! Flash Moving Company is Boston based and serve all surrounded area including Cambridge. Fully licensed and Insured Movers help you to move your belongings with professional crew.
                        </p>
                        <p>
                        Years of experience guarantee you stress-free moving. Our Customer service is always here to help you with any questions you have regarding your upcoming move. 
Depending on your size of the move we will provide you enough men to make sure we move you in shortest time, you don’t even need the whole day off! 
                        </p>
                        <p>
                        We also suggest before moving to get moving permit in Cambridge, to save moving time. More info is here. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="content-blocks__item">
        <div class="row content-blocks-item">
            <div class="col-lg-6 order-lg-0 content-blocks-item__preview">
                <img src="{{asset('images/services/local/content/86913f52-0728-45b7-b.jpg')}}" alt="" class="content-blocks-item__img">
            </div>
            <div class="col-lg-6 order-lg-1 content-blocks-item__body">
                <div class="content-blocks-item__body-inner">
                    <div class="content-blocks-item__header">
                        <div class="content-blocks-item__title-primary">Moving to Brookline MA</div>
                    </div>
                    <div class="content-blocks-item__text">
                        <p>
                        Our company have five-star reviews across different sources such as Yelp, Google and etc… That guarantees you exceptional service while Moving to Brookline MA.
                        </p>
                        <p>
                        The moving process is really simple and includes a clean truck (or more depending on the size of the move), a crew of professional and always ready to go movers who carefully protect your furniture from any possible scratches during the move. 
                        </p>
                        <p>
                        One of the important aspects of any moving company Brookline ma is insurance. Flash Moving is fully insured for both Interstate and Local moves, so you can simply rely on us.
                        <br>
                        Contact us now to get a quick moving quote from your Brookline Movers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
@section('content-faq')
<section>
    <div class="container">
    <h2 class="section__title section__title--uppercase">FAQ</h2>
    </div>
    <div class="container">
    <div class="accordion-content theme-white" id="accordionPricesFaq">
            <div class="accordion-content__list row">
                {{--1--}}
                <div class="accordion-content__item col-md-6">
                    <div class="accordion-content-item">
                        <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingHourlyRate" data-toggle="collapse" data-target="#collapseHourlyRate" aria-expanded="true" aria-controls="collapseHourlyRate">
                        How much does it cost to move in Cambridge, MA?
                            <div class="accordion-content-item__button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <div class="collapse accordion-content-item__body" id="collapseHourlyRate" aria-labelledby="headingHourlyRate" data-parent="#accordionPricesFaq">
                            <div class="accordion-content-item__text">
                            The Average hoourly rate to move in Cambridge, MA is $90/hour. It includes labor, truck, tolls, gas and wrapping materials.<br>
                            </div>
                        </div>
                    </div>
                </div>
                {{--2--}}
                <div class="accordion-content__item col-md-6">
                    <div class="accordion-content-item">
                        <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingLaborTime" data-toggle="collapse" data-target="#collapseLaborTime" aria-expanded="true" aria-controls="collapseLaborTime">
                        How to get moving permit<br> in Cambridge, MA?
                            <div class="accordion-content-item__button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <div class="collapse accordion-content-item__body" id="collapseLaborTime" aria-labelledby="headingLaborTime" data-parent="#accordionPricesFaq">
                            <div class="accordion-content-item__text">
                            To get moving permit in Cambridge, MA simply visit www.cambridgema.gov/traffic/Permits/movingvans and follow all the steps.<br>
                            </div>
                        </div>
                    </div>
                </div>
                {{--3--}}
                <div class="accordion-content__item col-md-6">
                    <div class="accordion-content-item">
                        <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingTravelTime" data-toggle="collapse" data-target="#collapseTravelTime" aria-expanded="true" aria-controls="collapseTravelTime">
                        How long is to move one bedroom<br> apt in Cambridge, MA?
                            <div class="accordion-content-item__button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <div class="collapse accordion-content-item__body" id="collapseTravelTime" aria-labelledby="headingTravelTime" data-parent="#accordionPricesFaq">
                            <div class="accordion-content-item__text">
                            To move a One Bedroom apartment in Cambridge, MA takes around 4 hours.<br>
                            </div>
                        </div>
                    </div>
                </div>
                {{--4--}}
                <div class="accordion-content__item col-md-6">
                    <div class="accordion-content-item">
                        <div class="accordion-content-item__header accordion-content-item__header--upper" id="headingCharge" data-toggle="collapse" data-target="#collapseCharge" aria-expanded="true" aria-controls="collapseCharge">
                        How to get packing service for your moving in Cambrdige, MA?
                            <div class="accordion-content-item__button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <div class="collapse accordion-content-item__body" id="collapseCharge" aria-labelledby="headingCharge" data-parent="#accordionPricesFaq">
                            <div class="accordion-content-item__text">
                            Flash Moving provides packing service for your move in Cambridge, MA. Contact us to get details.<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('content-list-2')
<p>
                        Our process is simple. You receive a quote, get answers on all questions you have regarding your move, we setup day and time when we come to your place and you are scheduled! Then we come to you in Cambridge or some other place and after carefully wrapping your belongings load it into the truck. Safely driving is also very important, our Cambridge movers are always experienced drivers and can drive through tiny Cambridge streets like professionals. After we come to your place we safely unload everything into your new place. 
We sign a moving contract before the move and after. All the payments are hourly based or flat rate.
<br>Choose us one of the best moving companies Cambridge MA.
                        </p>
@stop