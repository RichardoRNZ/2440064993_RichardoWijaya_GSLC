<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarRightAlignExample"
        aria-controls="navbarRightAlignExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarRightAlignExample">
        <a class="navbar-brand text-white" href="">MyMovies</a>
        <!-- Left links -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item {{Request::is('/') ? 'active' : '' }}">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item {{Request::is('/trending') ? 'active' : ''}}">
            <a class="nav-link text-white" href="{{ url('/trending') }}">Trending</a>
          </li>
          <li class="nav-item {{Request::is('/superhero') ? 'active' : '' }}">
            <a class="nav-link text-white" href="{{ url('/superhero') }}">Superhero</a>
          </li>



        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
