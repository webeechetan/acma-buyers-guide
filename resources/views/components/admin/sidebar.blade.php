<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
      <a href="{{route('admin.dashboard')}}" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="{{ asset('admin/') }}/assets/img/company/logo.png" alt="Logo" height="40">
        </span>
        {{-- <span class="app-brand-text demo menu-text fw-bold ms-2">Acma</span> --}}
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    <ul class="menu-inner py-1 ps--active-y">
      <!-- Dashboards -->
      <li class="menu-item {{ Route::is('admin.dashboard') ? 'active' : ''  }}">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
        </a>
      </li>

      {{-- Companies --}}
      <li class="menu-item {{ Route::is('admin.companies') ? 'active' : '' }}">
        <a href="{{ route('admin.companies') }}" class="menu-link ">
          <i class="menu-icon tf-icons bx bxs-factory"></i>
          <div class="text-truncate" data-i18n="Companies">Companies</div>
        </a>
      </li>



       <li class="menu-item {{ Route::is('admin.profile.approval') ? 'active' : '' }} ">
        <a href="{{route('admin.profile.approval')}}" class="menu-link ">
          <i class="menu-icon menu-icon bx bx-user"></i>
          <div class="text-truncate" data-i18n="Profile Request">Profile Request</div>
        </a>
      </li>

      
      {{-- Approved Request
      <li class="menu-item {{ Route::is('admin.profile.approved') ? 'active' : '' }} ">
        <a href="{{route('admin.profile.approved')}}" class="menu-link ">
          <i class="menu-icon menu-icon bx bx-user"></i>
          <div class="text-truncate" data-i18n="Approved Request">Approved Request</div>
        </a>
      </li> --}}
      
    </ul>
</aside>
