<!-- Navbar -->
<div class="w-100"  id="navbar-portal">
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark " id="navbar-portal">
     <img src="{{secure_asset('img/format.png')}}">
  </nav>
</div>
<header id="home" style="background-image:linear-gradient(rgba(0,0,0,0.20), rgba(0,0,0,0.20)) , url({{secure_asset('img/background.png')}})" alt="LGU background">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm fixed-bottom nav-up" id="navbar-header">
    <div>
      
    </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify mr-1 text-white" style="font-size: 25px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <!-- Right nav -->
        <ul class="nav navbar-nav ml-auto mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('page.home')}}">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('all.news')}}">
              Latest News
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#">Gallery</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">Photos</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Videos</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#">About</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('about.mission')}}">Mission / Vision</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.history')}}">History</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.land')}}">Land Area & Municipalities Boundaries</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.climate')}}">Climate</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.topography')}}">Topography & Slope</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.seal')}}">Seal Symbolism</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('about.barangay')}}">Barangays</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('contact')}}">
              Contact Us
            </a>
          </li>
        </ul>
      </div>
  </nav>
</header>
