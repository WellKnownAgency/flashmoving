<html lang="en">
  <head>
    @include('partials/_head')
  </head>
  <body>
    <div id="all">
      @include('partials/_nav')
      @yield('content')
      @include('partials/_footer')
    </div>
    @include('partials/_js')
  </body>
</html>
