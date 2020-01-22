<!-- Top navigation -->
<div class="container-top top-wrapper" id="hidewhensm">
  <div class="row" style="margin: 0;">
    <div class="col-md-4 align-self-center" style="padding: 0;">
      <div class="top-icons">
        <div class="icons-padding">
          <a href="https://www.facebook.com/flashmoversma/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="https://twitter.com/flashmoversma" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="https://www.instagram.com/flashmoversma/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4" style="padding: 0;">
      <div class="top-logo">
        <a href="/">
          <img itemprop="image" src="/images/logo.png" width="200px"/>
        </a>
      </div>
    </div>
    <div class="col-md-4 align-self-center" style="padding: 0;">
      <a href="mailto:info@flashmoving.net" class="float-right btn-header" style="margin-left: 10px;">info@flashmoving.net</a>
      <a href="tel:+18572418778" class="float-right btn-header" style="margin-left: 10px;"><span itemprop="telephone">+1 (857) 241-8778</span></a>
    </div>
  </div>
</div>
<!-- End of Top Navigation -->

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-our " id="hidewhensm">
  <div class="justify-content-center center-no-width">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="border-bot" href="/">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('services.local-moving')}}">Local Moving</a>
          <a class="dropdown-item" href="{{route('services.interstate-moving')}}">Long Distance Moving</a>
          <a class="dropdown-item" href="{{route('services.storage')}}">Moving and Storage</a>
					<a class="dropdown-item" href="{{route('services.packing')}}">Packing</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="border-bot" href="{{route('prices')}}">Prices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tooltipp" data-tooltip-content="#tooltip_content" href="{{route('family')}}">Family</a>
        <div class="tooltip_templates">
            <span id="tooltip_content">
                <div style="padding:15px 15px;">
                  <h4>Flash Moving Family</h4>
                  <p style="font-size: 14px; line-heoght: 20px;">
                  Revolutionary Loyalty Program specially designed to meet our customer's needs and to promote saving possibilities without prejudice to the quality of moving service
                  </p>
                </div>
            </span>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="border-bot" href="{{route('about-us')}}">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="border-bot" href="{{route('contact-us')}}">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="border-bot" href="/blog">Blog</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End of Main Navigation -->

<!-- Scrolling Navigation -->
<nav class="navbar navbar-expand-lg navbar-our-scroll fixed-top" id="scroll-nav" style="height=50px;">
  <a class="navbar-brand" href="/"><img src="/images/logo3.png" width="100px"/></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/local-moving">Local Moving</a>
          <a class="dropdown-item" href="{{route('services.interstate-moving')}}">Long Distance</a>
          <a class="dropdown-item" href="/storage">Moving and Storage</a>
					<a class="dropdown-item" href="/packers-and-movers">Packing</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/prices">Prices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tooltipp" data-tooltip-content="#tooltip_content" href="/family">Family</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about-us">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact-us">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
    </ul>
    <ul class="ml-auto navbar-nav">
      <li class="nav-item" style="padding-top:10px;">
        <a href="tel:+18572418778" class="nav-link" style="font-size:1.25em; margin-top:-5px;">+1 (857) 241-8778</a>
      </li>
      <li class="nav-item" style="margin-left: 10px">
        <a href="https://oncueapp.com/flash-moving" class="btn-hero btn-hero-nav btn-hero--small btn-hero--hover-green">Book Now</a>
      </li>
    </ul>
  </div>
</nav>
