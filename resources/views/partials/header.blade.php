<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('index')}}">Go to homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::Check())
        <li><a href="{{route('product.index')}}">
            Products
            <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </a>
        </li>
        @endif
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
              @if(Auth::check())
                <li><a href="{{route('user.profile')}}">User Profile</a></li>
                <li><a href="{{route('user.logout')}}">Logout</a></li>
              @else
                  <li><a href="{{route('user.signup')}}">Signup</a></li>
                  <li><a href="{{route('user.signin')}}">Signin</a></li>
              @endif

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
