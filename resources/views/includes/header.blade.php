<header id="home" data-background-image="{{asset('img/background.png')}}" class="lozad">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark position-fixed fixed-top mb-4 nav-up" id="navbar-header">
      <img src="{{asset('img/lgu-logo.png')}}" alt="LGU Baggao Logo" id="lgu-logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify mr-1 text-white" style="font-size: 25px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <!-- Right nav -->
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="bootstrap-4-navbar.html">Tourism
            </a></li>
          <li class="nav-item">
            <a class="nav-link text-white" href="bootstrap-4-navbar-static-top.html">Environment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="bootstrap-4-navbar-fixed-top.html">
              Agriculture
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
                <a class="dropdown-item" href="#">Mission / Vision</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">History</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Land Area & Municipalities Boundaries</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Climate</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Topography & Slope</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Seal Symbolism</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Barangays</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              Contact Us
            </a>
          </li>
        </ul>
      </div>
  </nav>
</header>
<script type="text/javascript">
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();
</script>