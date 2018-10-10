<html lang="en">
  <head>
    @include('partials/_head')
  </head>
  <body>
    <div class="page">
        <div class="page__header">
            @include('partials/_header')
        </div>
        <div class="page__body">
            <div class="body">
                @yield('content')
            </div>
        </div>
        <div class="page__footer">
            @include('partials/_footer')
        </div>
    </div>
    @include('partials/_js')
  </body>
</html>
