  <!-- Menu -->

  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
          <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                  <img src="{{URL::asset('/assets/img/web-development.png')}}" alt="" height="40" width="40">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">admin</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
          <!-- Dashboard -->

          <!-- Layouts -->

          <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
          </li>
          <li class="menu-item {{ request()->is('profile*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Profile</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item {{ request()->is('profile*') ? 'active' : '' }}">
                      <a href="{{ route('profile') }}" class="menu-link">
                          <div data-i18n="Account">List</div>
                      </a>
                  </li>

              </ul>
          </li>
          <li class="menu-item {{ request()->is('skill*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Authentications">Skills</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item {{ request()->is('skill*') ? 'active open' : '' }}">
                      <a href="{{ route('skill') }}" class="menu-link">
                          <div data-i18n="Account">List</div>
                      </a>
                  </li>

              </ul>
          </li>
          <li class="menu-item {{ request()->is('exper*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                  <div data-i18n="Misc">Expericence</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item {{ request()->is('exper*') ? 'active open' : '' }}">
                      <a href="{{ route('exper') }}" class="menu-link">
                          <div data-i18n="Error">List</div>
                      </a>
                  </li>

              </ul>
          </li>
      </ul>
  </aside>
  <!-- / Menu -->
