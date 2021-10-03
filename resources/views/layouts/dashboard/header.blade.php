<header class="header header-light" style="background-color: #05064c; border-bottom:2px solid #fff;">
  <nav class="navbar flex-nowrap p-0">
   <div class="navbar-brand-wrapper" style="background-color: #05064c">
      <!-- Logo For Mobile View -->
      <a class="navbar-brand navbar-brand-mobile bg-white rounded-circle" href="index.html">
        <img class="img-fluid w-100" src="{{ asset('images/logo-min.png') }}" alt="Nova">
      </a>
      <!-- End Logo For Mobile View -->

      <!-- Logo For Desktop View -->
      <a class="navbar-brand navbar-brand-desktop bg-white rounded-circle text-center" href="index.html">
        <img class="side-nav-show-on-closed round-circle" src="{{ asset('images/logo-min.png') }}" alt="Nova" style="width: 41px; height: 33px;">
      </a>
      <!-- End Logo For Desktop View -->
    </div>


    <div class="header-content col px-md-3 px-md-3">
      <div class="d-flex align-items-center">
        <!-- Side Nav Toggle -->
        <a class="js-side-nav header-invoker mr-md-2" href="#"
           data-close-invoker="#sidebarClose"
           data-target="#sidebar"
           data-target-wrapper="body">
          <i class="nova-align-left"></i>
        </a>
        <!-- End Side Nav Toggle -->


        <!-- Header Dropdown -->
        <div class="d-flex ml-auto">
          <a  class="header-invoker" href="#">
            <i class="bi bi-stack mr-1"></i>  
             <span> How it works</span>
          </a>
          <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#notifications"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <span class="indicator  indicator-primary rounded-circle"></span>
            <i class="bi bi-bell"></i>
          </a>
          <a class="header-invoker" href="{{ route('logout') }}" aria-controls="notifications"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
             <i class="bi bi-power"></i>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </a>

        </div>
        <!-- End Header Dropdown -->

        <!-- Header User Dropdown -->
        {{-- <div class="dropdown mx-3">
          <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#profileMenu"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <img class="avatar rounded-circle mr-md-2" src="../../assets/img/100x100/img9.jpg" alt="Image description">
            <span class="d-none d-md-block">David Walters</span>
            <i class="nova-angle-down d-none d-md-block ml-2"></i>
          </a>

          <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4" aria-labelledby="profileMenuInvoker">
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-user"></i>
                </span>
                My Profile
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-cup"></i>
                </span>
                Upgrade Plan
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-folder"></i>
                </span>
                Latest Projects
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-book"></i>
                </span>
                Get Support
              </a>
            </li>
            <li class="unfold-item unfold-item-has-divider">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-power-off"></i>
                </span>
                Sign Out
              </a>
            </li>
          </ul>
        </div> --}}
        <!-- End Header User Dropdown -->
      </div>
    </div>
  </nav>
</header>
