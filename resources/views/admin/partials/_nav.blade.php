
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
  <div class="logo">
    <a href="/admin/" title="Flashmoving">
      <img class="img-responsive" src="/images/logo.png" height="60px" alt="">
    </a>
  </div><!--end logo-->
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  @guest

    @else
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item ">
        <a class="nav-link {{ Request::is('admin/posts') ?"active-nav" : ""}}" href="/admin/posts">Posts</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{ Request::is('admin/prices') ?"active-nav" : ""}}" href="/admin/prices">Prices</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
      </ul>
    @endguest
  </div>
</nav>
