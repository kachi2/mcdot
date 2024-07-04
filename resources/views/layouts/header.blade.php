<header class="header header-layout2">
    <nav class="navbar navbar-expand-lg sticky-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          {{-- <img src="" class="logo-light" alt="logo"> --}}
          {{-- <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo"> --}}
          <a href="{{route('index')}}"><img src="{{asset('assets/'.$settings->logo)}}" alt="{{$settings->site_name}}" class="logo-dark" width="120px"></a>
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav ml-auto">
            @foreach ($menus as $menu )
            @if($menu->has_child)
            <li class="nav__item has-dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">{{$menu->name}}</a>
              @if(count($menu->subMenu) > 0)
              <ul class="dropdown-menu">
                @forelse ($menu->subMenu as $sub) 
                <li class="nav__item">
                  <a href="{{route($sub->slug, $sub->hashid)}}" class="nav__item-link">{{$sub->name}}</a>
                </li>
                @empty
                @endforelse
              </ul>
              @endif
            </li><!-- /.nav-item -->
            @else 
            <li class="nav__item"> <a class="nav__item-link" href="{{route($menu->slug)}}">{{$menu->name}}</a>@endif
            @endforeach
          </ul><!-- /.navbar-nav -->
          <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
        </div><!-- /.navbar-collapse -->
        <div class="d-none d-xl-flex align-items-center position-relative ml-30">
          <a href="{{route('users.contact')}}" class="btn btn__primary btn__rounded">
            <i class="icon-calendar"></i>
            <span>Contact Us</span>
          </a>
        </div>
        <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <a href="{{route('upload.cv')}}" class="btn btn__secondary btn__rounded">
              <i class="icon-calendar"></i>
              <span>Register with Us</span>
            </a>
          </div>
        {{-- <button class="action__btn-search ml-30"><i class="fa fa-search"></i></button> --}}
      </div><!-- /.container -->
    </nav><!-- /.navabr -->
  </header><!-- /.Header -->