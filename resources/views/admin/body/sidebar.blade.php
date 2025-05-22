
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
      <a href="{{route('dashboard')}}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Master Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Home Page Data</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('home.slider')}}">
                        <span class="nav-text">Slider</span>

                    </a>
                    </li>
                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('home.about')}}">
                        <span class="nav-text">About</span>

                    </a>
                    </li>
                    {{-- <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('multi.image')}}">
                        <span class="nav-text">portfolio</span>

                    </a>
                    </li> --}}
                    {{-- <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('all.brand')}}">
                        <span class="nav-text">Brand</span>

                    </a>
                    </li> --}}

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('service.view')}}">
                        <span class="nav-text">Services</span>

                    </a>
                    </li>

                </div>
              </ul>
            </li>


            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#real_estate"
                aria-expanded="false" aria-controls="real_estate">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Real Estate</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="real_estate"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('real_estate.index')}}">
                        <span class="nav-text">Buildings</span>

                    </a>
                    </li>

                </div>
              </ul>
            </li>

            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#agro"
                aria-expanded="false" aria-controls="agro">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Agro Sector</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="agro"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('agro.index')}}">
                        <span class="nav-text">Agro Page</span>

                    </a>
                    </li>

                </div>
              </ul>
            </li>


            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                aria-expanded="false" aria-controls="contact">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Contact</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="contact"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('contact.admin')}}">
                        <span class="nav-text">Contact Profile</span>

                    </a>
                    </li>

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('contact.message')}}">
                        <span class="nav-text">Contact message</span>

                    </a>
                    </li>

                </div>
              </ul>
            </li>

            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#about"
                aria-expanded="false" aria-controls="about">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">About Us</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="about"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                    <a class="sidenav-item-link" href="{{route('about_us.index')}}">
                        <span class="nav-text">Member List</span>

                    </a>
                    </li>

                </div>
              </ul>
            </li>

            {{-- Services --}}
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Sociallinks"
                aria-expanded="false" aria-controls="Sociallinks">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Sociallinks</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="Sociallinks"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                    <li  class="active" >
                        <a class="sidenav-item-link" href="{{route('social.view')}}">
                        <span class="nav-text">Sociallinks</span>

                        </a>
                    </li>

                </div>
              </ul>
            </li>
        </ul>

      </div>

      <hr class="separator" />

        </div>
  </aside>
