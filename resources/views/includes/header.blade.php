<div class="container px-4 mx-auto ">
    <nav class="bg-white relative py-7 flex justify-between flex-wrap">
      <a class="navbar-brand absolute font-semibold" href="{{ route('home') }}">
        Luxe Tribes
      </a>
      <button
        class="navbar-toggler ml-auto"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
        id="toggler"
      >
        <div class="fa fa-bars text-gray-500"></div>
      </button>
      <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav  mr-auto">
          <li class="py-1">
            <a href="https://luxetribes.com/group-trip/" class="nav-link px-2 py-4 d-block">
              Group trips
            </a>
          </li>
          <li class="py-1">
            <a href="https://luxetribes.com/private-trips/" class="nav-link px-2 py-4 d-block">
              Private trips
            </a>
          </li>
          <li class="py-1">
            <a href="https://luxetribes.com/reviews/" class="nav-link px-2 py-4 d-block">
              Past trips & reviews
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="py-1">
            <a href="https://luxetribes.com/about-us/" class="nav-link px-2 py-4 d-block">
              About us
            </a>
          </li>
          <li class="py-1">
            <a href="https://luxetribes.com/safety/" class="nav-link px-2 py-4 d-block">
              FAQs
            </a>
          </li>
          <li class="py-1">
            <a href="https://luxetribes.com/blogs/" class="nav-link px-2 py-4 d-block">
              Blog
            </a>
          </li>
          <li class="py-1">
            <a href="https://luxetribes.com/contact-us/" class="nav-link px-2 py-4 d-block">
              Contact us
            </a>
          </li>
          <li class="py-2 px-2">
            <a
              href="https://luxetribes.com/search/"
              class="btn pb-1 border border-black rounded-xl font-bold py-2 px-2"
            >
              <i class="fa fa-search"></i>
            </a>
          </li>
          @auth
          <li class="py-2">
            <a
              class="btn pb-1 border border-black rounded-xl font-bold py-2  px-2"
              href="/login"
            >
              <i class="fa fa-user"></i> &nbsp;dashboard
            </a>
          </li>
          @else
          <li class="py-2 ">
            <a
              class="btn pb-1 border border-black rounded-xl font-bold py-2  px-2"
              href="/login"
            >
              <i class="fa fa-user"></i> &nbsp;Log in
            </a>
          </li>
          @endif
          
        </ul>
      </div>
    </nav>
  </div>
  <script>
      document.getElementById("toggler").addEventListener("click",function(e) {
          const t = document.getElementById("navbarNavAltMarkup")
          t.classList.toggle("showNav")
      })
  </script>