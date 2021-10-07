 @php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
  $d = Request::url();
@endphp


  <!-- Sidebar Nav -->
  <aside id="sidebar" class="js-custom-scroll side-nav border-sidebar" style="background-color: #05064c">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
      <!-- Sidebar Sub Title -->
      <li class="sidebar-heading h6">Welcome {{ Auth::user()->username }}</li>
      <!-- End Sidebar Sub Title -->

      <!-- Dashboards -->
      <li class="side-nav-menu-item {{ ($route == 'dashboard') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('dashboard') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-speedometer2"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Dashboards</span>
        </a>
      </li>
      <!-- End Dashboards -->

      <!-- Support Ticket -->
      <li class="side-nav-menu-item {{ ($route == 'support_ticket') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('support_ticket') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-chat-text"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Support Ticket</span>
        </a>
      </li>
      <!-- End Support Ticket -->

      <!-- Profile -->
      <li class="side-nav-menu-item {{ ($route == 'user_profile') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('user_profile') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-pencil"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">My Profile</span>
        </a>
      </li>
      <!-- End Profile-->

      <!-- My Referrals -->
      <li class="side-nav-menu-item side-nav-has-menu">
        <a class="side-nav-menu-link media align-items-center" href="#"
           data-target="#subMenuSettings">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-tree"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">My Referrals</span>
          <span class="side-nav-control-icon d-flex">
            <i class="nova-angle-right side-nav-fadeout-on-closed"></i>
          </span>
          <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
        </a>

        <ul id="subMenuSettings" class="side-nav-menu side-nav-menu-second-level mb-0">
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              Genealogy
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              My Referrals
            </a>
          </li>
        </ul>
      </li>
      <li class="side-nav-menu-item side-nav-has-menu">
        <a class="side-nav-menu-link media align-items-center" href="#"
           data-target="#payments">
          <span class="side-nav-menu-icon d-flex mr-3">
            &#8358;
          </span>
          <span class="side-nav-fadeout-on-closed media-body">My Payments</span>
          <span class="side-nav-control-icon d-flex">
            <i class="nova-angle-right side-nav-fadeout-on-closed"></i>
          </span>
          <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
        </a>

        <ul id="payments" class="side-nav-menu side-nav-menu-second-level mb-0">
          <li class="side-nav-menu-item">

            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span> Upgrade</span>
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span>My Referrals</span>
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span>Payment Processors</span>
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span>Provided Payments</span>
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span>Pending Payments</span>
            </a>
          </li>
          <li class="side-nav-menu-item">
            <a class="text-gray-light link-sidebar" href="#">
              <i class="bi bi-circle"></i>
              <span>Completed Payments</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End My Payments -->

      {{-- Setting --}}
      <li class="side-nav-menu-item {{ ($route == 'setting') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('setting') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-gear"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Setting</span>
        </a>
      </li>
      {{-- End Setting --}}

      {{-- Updates --}}
      <li class="side-nav-menu-item {{ ($route == 'update') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="#">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-bell"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Upates</span>
        </a>
      </li>
      {{-- End Updates --}}
      <li class="side-nav-menu-item {{ ($route == 'referral_link') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('referral_link') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-circle"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Referral Link</span>
        </a>
      </li>
      <li class="side-nav-menu-item {{ ($route == 'view_password') ? 'active' : '' }}">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('view_password') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-pencil"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Change Password</span>
        </a>
      </li>
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="#">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="bi bi-power"></i>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Logout</span>
        </a>
      </li>
    </ul>
  </aside>
  <!-- End Sidebar Nav -->
