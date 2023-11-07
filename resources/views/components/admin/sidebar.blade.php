<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="https://startup.acma.in/assets/images/logo.jpg" alt="Logo" height="40">
        </span>
        {{-- <span class="app-brand-text demo menu-text fw-bold ms-2">Acma</span> --}}
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    
    
    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>

      <!-- Subscriptions -->
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link ">
          <i class='menu-icon tf-icons bx bx-purchase-tag-alt'></i>
          <div class="text-truncate" data-i18n="Subscriptions">Subscriptions</div>
        </a>
      </li>
      {{-- Companies --}}
      <li class="menu-item ">
        <a href="{{ route('admin.companies') }}" class="menu-link ">
          <i class="menu-icon tf-icons bx bxs-factory"></i>
          <div class="text-truncate" data-i18n="Companies">Companies</div>
        </a>
      </li>

      {{-- Members --}}
      <li class="menu-item ">
        <a href="{{ route('admin.members')}}" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div class="text-truncate" data-i18n="Members">Members</div>
        </a>
      </li>
      {{-- Payments --}}
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-dollar"></i>
          <div class="text-truncate" data-i18n="Payments">Payments</div>
        </a>
      </li>
      
    </ul>
</aside>