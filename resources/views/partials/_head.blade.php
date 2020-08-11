<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Meta -->
<title>@yield('title')</title>
<meta name="description" content="@yield('dscr')" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<!-- CSS -->
<link rel="stylesheet" href="{{ mix('/css/app.css') }}" >

<link rel="stylesheet" type="text/css" href="/css/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/css/tooltipster-sideTip-borderless.min.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('preload')
@yield('customcss')
@yield('faqhead')