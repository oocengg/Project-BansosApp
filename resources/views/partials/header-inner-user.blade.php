<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('userHome') }}"><span>BansosApp</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="{{ route('userHome') }}">Home</a></li>
                @if (Auth::user()->databansos_id == NULL)
                <li><a class="nav-link scrollto" href="{{ route('pengajuan.index') }}">Pengajuan</a></li>
                @else
                <li><a class="nav-link scrollto" href="{{ route('profile.show', Auth::user()->id) }}">Profile</a></li>
                @endif
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li>
                    <a class="nav-link scrollto" href="{{ route('login') }}">
                        <button type="button" class="btn btn-success">Sign In</button>
                    </a>
                </li>
                @endif
                @else
                <li>
                    <a class="nav-link scrollto" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button type="button" class="btn btn-danger">Sign Out</button>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header><!-- End Header -->