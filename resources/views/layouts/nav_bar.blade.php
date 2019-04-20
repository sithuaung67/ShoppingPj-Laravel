<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
           <i class="fas fa-shopping-cart"></i> Mi Show Room......
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <form class="form-inline" action="{{route('search.product')}}" method="get">
                        <input class="form-control mr-sm-2" name="q" required type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    @csrf
                    </form>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cart.show')}}"><i style="color: #efefef ;" class="fas fa-shopping-cart"></i>
                    @if(Session::has('cart'))
                            <span class="badge badge-light">{{Session::get('cart')->totallyQty}}</span>
                    @endif
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" >
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('/',['#contactForm'])}}" style="color: #efefef;">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="color: #efefef;">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="color: #efefef;">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}" style="color: #efefef;"><i class="fas fa-tachometer" ></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories')}}" style="color: #efefef;"><i class="fas fa-database"></i>Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders')}}" style="color: #efefef;"><i class="fas fa-database"></i>Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}" style="color: #efefef;"><i class="fas fa-database"></i>Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" style="color: navajowhite;" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>