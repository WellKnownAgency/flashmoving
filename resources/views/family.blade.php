@section('title', '')
@section('dscr', '')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')

@section('content')
<progress value="0" style="z-index: 9999;"></progress>

  <!--
  Place the rest of your markup here
  --------------------------------->
{{-- Hero Start--}}
<section class="hero hero--big">
    <div class="hero__preview">
        <img src="/images/hero/erda-estremera-58145.jpg" alt="" class="hero__img hero__img--brightness-high">
    </div>
    <div class="hero__container">
        <div class="hero__content">
            <div class="hero__row">
                <div class="hero__title">
                    <div class="hero-title-big">
                        <div class="hero-title-big__text">
                            Flash moving
                            <span class="hero-title-big__dynamic hero-title-big__text--color-red"></span>
                        </div>
                    </div>
                </div>
                <div class="hero__button">
                    <a class="btn-hero" href="#">Join</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Hero End --}}



<!--Section text "Flash Movng Fmaily" starts -->
<section class="section photo-exposition">
    <div class="container">
        <div class="photo-exposition__row">
            <div class="photo-exposition__left">
                <div class="photo-exposition-content">
                    <div class="photo-exposition-content__inner">
                        <h2 class="photo-exposition-content__title">Flash Moving Family</h2>
                        <div class="photo-exposition-content__description">
                            Revolutionary Loyalty Program specially designed to meet our customer's needs and to promote saving possibilities without prejudice to the quality of moving service
                        </div>
                    </div>
                </div>
            </div>
            <div class="photo-exposition__right">
                <div class="photo-exposition__preview">
                    <img src="{{asset('images/family/IMG_7937.jpg')}}" alt="Flash Moving Family" class="photo-exposition__img">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of Section -->

<!--Section text "Six Reasons to join the family" starts-->
<section class="section">
    <h2 class="section__title section__title--uppercase">Six Reasons to join the family</h2>
    <div class="section-description section-description--narrow">
        Everyday we work hard to make your moving experience easy and stress free
    </div>
    <div class="section__collection">
        <div class="container reasons-collection">
            <ul class="row reasons-collection__list">
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">Permanent access to special offers and deals</h3>
                        <div class="reasons-collection-item__description">Flash Moving Family members will be among the first to receive special offers and deals. They will also have an access to discounts offered only for Loyalty Program members</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">All year round service</h3>
                        <div class="reasons-collection-item__description">We offer a 365-days a year service for all Flash Moving Family members</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">Unlimited possibilities to save money on your current and future moves</h3>
                        <div class="reasons-collection-item__description">Flash Moving Family members can participate in monthly giveaway contests and share their moving experience with friends and family to receive never ending bonuses</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">Mileage, tolls, and gas included in the rate</h3>
                        <div class="reasons-collection-item__description">We do not apply any additional fees for extra miles, toll roads, and gas to Loyalty Program Participants</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">Monthly discount giveaway</h3>
                        <div class="reasons-collection-item__description">Once you shared your moving experience on any social media, you will automatically participate in a monthly $15, $25, and $50 off service giveaway</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
                <li class="col-md-6 reasons-collection__item">
                    <div class="reasons-collection-item reasons-collection-item--icon reasons-collection-item--icon-fix-col">
                        <h3 class="reasons-collection-item__title">Free disassembling and reassembling of furniture</h3>
                        <div class="reasons-collection-item__description">Flash moving Family members receive free, quick, and efficient furniture disassembling and reassembling service.</div>
                        <div class="reasons-collection-item__icon">
                            <svg class="t820__checkmark" style="width:30px; height:30px;" fill="#db4623" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path><path d="M50.2 1.9C23.5 1.9 1.7 23.7 1.7 50.4s21.8 48.5 48.5 48.5 48.4-21.8 48.5-48.5c0-26.7-21.8-48.5-48.5-48.5zm-7.3 71.4L22.7 53.2l4.2-4.3 15.8 15.7 32.1-35.4 4.4 4-36.3 40.1z"></path></svg>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="section__button">
        <a href="#" class="btn-simple btn-simple--border btn-simple--medium">Join</a>
    </div>
</section>
<!--End of Section -->

<!--Section text "How much money do you save" starts-->
<section class="section">
    <div class="title-decorate">
        <div class="title-decorate__top-line">
            <svg class="t676__divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
        </div>
        <h2 class="title-decorate__text">How much money do you save?</h2>
        <div class="title-decorate__bottom-line">
            <svg class="t676__divider t676__divider_rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
        </div>
    </div>
    <div class="section__collection">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="accordion-content" id="accordionMoneySave">
                        <div class="accordion-content__list">
                            <div class="accordion-content__item">
                                <div class="accordion-content-item">
                                    <div class="accordion-content-item__header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        First-time customer
                                        <div class="accordion-content-item__button">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-content-item__body" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionMoneySave">
                                        <div class="accordion-content-item__text">
                                            <strong> TYPES OF BONUSES:</strong><br> Registration bonus <br> Welcome bonus <br> Double Saving Discount<br><br><strong></strong><strong>Example:</strong><strong><br></strong>If you are moving from a <strong>2BD apartment </strong>and the total amount of your move is <strong>$750</strong>, you can apply a <strong>5% Welcome Bonus</strong>. <br><br> Additional <strong>5% Double Saving Bonus</strong> will automatically go to your Flash Moving Account and will be applied to your next move. <br><br> Thus, <strong>you save $75 </strong>just for becoming a member of our Family. <br><br> If you have already registered your e-mail on our website <a href="http://www.flashmoving.net">www.flashmoving.net</a>, we will add a <strong>$10 discount</strong> on top of that. <br><br><strong>TOTAL SAVING: $85</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-content__item">
                                <div class="accordion-content-item">
                                    <div class="accordion-content-item__header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Repeat customer
                                        <div class="accordion-content-item__button">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-content-item__body" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionMoneySave">
                                        <div class="accordion-content-item__text">
                                            <strong> <strong>TYPES OF BONUSES</strong>: </strong><br> Double Saving Bonus<br>Referral Bonus <br> Giveaway Bonus <br><br> <strong>Example: </strong><br> You are moving again from a <strong>2BD Apartment</strong> and you already have some savings on you <em>Flash Moving Accoun</em><u>t</u>. Your Total amount is <strong>$750</strong> and <strong>5% Double Saving Bonus</strong> is applied to that amount right away. <br><br> It was a long year full of great parties and unforgettable moments with family and friends.<br> Let's pretend you have told them about Flash Moving Company and at least one of them became a member of our Family. <br><br> In this case, you can be sure that<strong> $15 discount</strong> was applied to your friend's or family member's accounts and <strong>$10 discount</strong> was automatically added to your Account. <br><br> Now imagine two, three or four friends of yours decided to join the family? <br>Yes, the possibilities to save extra are endless… <br><br> <strong>Facebook, Google</strong> or <strong>Yelp </strong>user? If yes, we hope you didn't miss a chance to share your experience with Flash Movers on any social media. The more you shared, the higher were your chances to win <strong>$15, $25, and $50 off service</strong> giveaway throughout the year. <br><br> Even in the worst case scenario (one shared review), your chances to win at least <strong>$15 </strong>were pretty high. What if you were lucky enough to win <strong>$50 instead of $15</strong>? Or you won twice? <br>Again, the possibilities to save some extra money on your move are not limited to anything in this world…Unless you don't have an access to the Internet, do you? <br><br> <strong> TOTAL SAVING: </strong><strong>Starts from </strong>a guaranteed<strong> $37.5 </strong>discount <strong>(5% double saving discount) </strong>and <strong>goes beyond your wildest expectations</strong>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-content__item">
                                <div class="accordion-content-item">
                                    <div class="accordion-content-item__header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Referral customer
                                        <div class="accordion-content-item__button">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#222222"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-content-item__body" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionMoneySave">
                                        <div class="accordion-content-item__text">
                                            <strong> <strong data-redactor-tag="strong">TYPES OF BONUSES</strong>:</strong><br>Welcome Bonus <br> Referral Bonus <br> Double Saving Bonus <br><br> <strong>BINGO! </strong><br><br> Today you are <strong>the luckiest person</strong> on the planet and we will explain you why. <br><br> <strong>Example: </strong><br> If you are moving from a <strong>2BD apartment</strong> and the total amount of your move is <strong>$750</strong>, you can apply a <strong>5% Welcome Bonus</strong>. <br><br> Additional<strong> 5% Double Saving Bonus</strong> will automatically go to your <em>Flash Moving Account </em>and will be applied to your next move. <br><br> You <strong>save $75</strong> just for becoming a member of our Family. <br><br> Have a friend or a family member referred you to us? That's great! You get <strong>extra $15 off</strong> the total cost. <br><br> <strong>P.S. </strong>Don't be afraid of asking your friends whether they need their bonuses or want to share them with you. Who knows, you might be lucky enough to receive some <strong>extra «extra»</strong> from your friends. <br><br><strong>TOTAL SAVING </strong>: starts <strong>from $90 </strong><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__gr-line">
                        <div class="gr-line">
                            <a href="#" class="section__footer-link" data-toggle="modal" data-target="#termConditionsModal">Terms and Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modal --}}
<div class="modal fade" id="termConditionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content modal-content-site">
            <div class="modal-header modal-content-site__header">
                <img src="{{asset('images/family/Registration_bonus_1.png')}}" alt="">
            </div>
            <div class="modal-body modal-content-site__body">
                <ul> <li> Flash Moving Loyalty Program is applied to Local Moves; <br> </li> <li> Bonus discounts do not expire;<br> </li> <li> You can use Loyalty Program Bonuses yourself or you can transfer them to your friend's and family member's Accounts;<br> </li> <li> You should contact Flash Moving Company manager directly to transfer your Bonuses;<br> </li> <li> You should contact Flash Moving Company manager two weeks, prior to the move, to redeem your Bonuses;<br> </li> <li> Welcome bonus is a one-time bonus discount which is applied to the very first move with Flash Moving Company;<br> </li> <li> Flash Moving Loyalty Program Bonuses cannot be combined with special offers and deals; A Referral Bonus cannot be combined with a Registration Bonus; </li> <li> Bonuses cannot be applied during High- Peak Season ( 08/27 - 09/03 and 12/24 - 12/25);<br> </li> <li> A Giveaway contest is held the last day of each month;<br> </li> <li> Only Client's Phone Number can be used as a Referral ID <br> </li></ul>
            </div>
        </div>
    </div>
</div>
<!--End of Section -->

<!--Section text "join the Family" starts-->
<section class="section">
    <h2 class="section__title section__title--uppercase">Join the family</h2>
    <div class="section__collection">
        <div class="container">
            <div class="tree-ul">
                <div class="tree-ul__list">
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Register your e-mail and get $10 off service</div>
                                <div class="tree-ul-item__description">Proceed to our website to complete the registration</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Send us your Inquiry</div>
                                <div class="tree-ul-item__description">Press the «FREE ESTIMATE» button to choose desired date and time for your move</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Get free estimate</div>
                                <div class="tree-ul-item__description">Our manager will contact you to ask a few questions and provide with an accurate estimate</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Get ready for the move</div>
                                <div class="tree-ul-item__description">We are on the way</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Apply your bonuses</div>
                                <div class="tree-ul-item__description">First-time Customer, Repeat customer, Referral Customer</div>
                            </div>
                        </div>
                    </div>
                    <div class="tree-ul__row">
                        <div class="tree-ul__item">
                            <div class="tree-ul-item">
                                <div class="tree-ul-item__title">Become a part of a Family greater than you ever imagined</div>
                                <div class="tree-ul-item__description">Congratulations!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section__button">
        <a href="#" class="btn-simple btn-simple--border btn-simple--medium">Join</a>
    </div>
</section>
<!--End of Section -->

<!--Section text "We are a part of the family (Reviews)" starts-->
<section class="section">
    <h2 class="section__title section__title--uppercase">We are a part of the family</h2>
    <div class="section__collection">
        <div id="carouselReviews" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselReviews" data-slide-to="0" class="active"></li>
                <li data-target="#carouselReviews" data-slide-to="1"></li>
                <li data-target="#carouselReviews" data-slide-to="2"></li>
                <li data-target="#carouselReviews" data-slide-to="3"></li>
                <li data-target="#carouselReviews" data-slide-to="4"></li>
            </ol>
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
    </div>
</section>
<!--End of Section -->

<!--Section Instagram starts-->
<section class="section">
    <div class="container photo-collection">
        <div class="row photo-collection__list">
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/41820005_2172064109699170_3076862583886066016_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/41882030_343641603055547_5230966097571686024_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/41756491_732463330441130_2774315474169046711_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/35575124_623136438084862_7336070841857212416_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/34477855_1676357599146487_5043478236248408064_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/21984956_1976363029276200_6037564883812220928_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/21984662_283261412190973_189828659605929984_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item">
                <a href="#" class="photo-collection__link">
                    <img src="{{asset('images/gallery/21984956_1976363029276200_6037564883812220928_n.jpg')}}" alt="" class="photo-collection__img">
                </a>
            </div>
        </div>
    </div>
</section>
<!--End of Section -->

<!--Section Contacts starts-->
<section class="section">
    <h2 class="section__title">Contacts</h2>
    <div class="section-description section-description--narrow">
        We build our business based on strong relationships with the customers. Do not hesitate asking us any moving related questions
    </div>
    <div class="section__collection">
        <div class="container pre-footer">
            <div class="pre-footer__list">
                <div class="pre-footer__item">
                    <b>Phone:</b> <a class="link-marked" href="tel:+18572418778">+1 857 241 8778</a>
                </div>
                <div class="pre-footer__item">
                    <b>E-mail:</b> <a href="mailto:info@flashmoving.net">info@flashmoving.net</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of Section -->
@stop


@section('customjs')
    <script>
        // Hero section
        new Typed('.hero-title-big__dynamic', {
            strings: ["Compa", "Family"],
            typeSpeed: 200,
            backSpeed: 10,
            startDelay: 600,
            backDelay: 800,
            loop: false
        });

        // accordion
        $('#accordionMoneySave').on('show.bs.collapse', function (e) {
            var item = e.target;
            $(item).closest('.accordion-content-item').find('.accordion-content-item__button').addClass('accordion-content-item__button--rotate').addClass('accordion-content-item__button--hover');
        })
        $('#accordionMoneySave').on('hidden.bs.collapse', function (e) {
            var item = e.target;
            $(item).closest('.accordion-content-item').find('.accordion-content-item__button').removeClass('accordion-content-item__button--rotate').removeClass('accordion-content-item__button--hover');
        })
    </script>
@stop
