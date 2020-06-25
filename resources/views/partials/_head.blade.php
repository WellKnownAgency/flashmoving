<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Meta -->
<title>@yield('title')</title>
<meta name="description" content="@yield('dscr')" />

<!-- CSS -->
<link rel="stylesheet" href="/css/app.css" >
<link rel="stylesheet" href="/css/custom.css" >

<link rel="stylesheet" type="text/css" href="/css/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/css/tooltipster-sideTip-borderless.min.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">


<style>
.move-calc-wrapper.elromco-mobile {
display:none;
}
@media(max-width:1100px) {
.move-calc-wrapper.elromco-mobile {
display:block;
}
.move-calc-wrapper.elromco-desktop {
display:none;
}
}
@media only screen and (max-width: 960px) {
    .mob-width {
      width:300px;
      height: 530px;
    }
  }
</style>

@yield('preload')
@yield('customcss')
@yield('faqhead')