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

<link type="text/css" media="all" href="/elromco-min/elromco.css" rel="stylesheet" />    
<link type="text/css" media="all" href="/elromco-min/company/company.css" rel="stylesheet" />

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
</style>

@yield('preload')
@yield('customcss')