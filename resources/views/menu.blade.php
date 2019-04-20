<nav class="navbar navbar-expand-md bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i style="color: white" class="fas fa-home"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @foreach($cats as $cat)
                <li class="nav-item">
                    <a style="color: white" href="{{route('product.cat',['id'=>$cat->id])}}" class="nav-link">{{$cat->cat_name}}</a>
                </li>
                    @endforeach
            </ul>
         </div>
        </div>
    </div>
</nav>