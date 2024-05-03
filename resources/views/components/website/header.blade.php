<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xxl">
        <a class="navbar-brand" href="{{route('company.dashboard')}}">
            <div class="logo">
            <img src="https://www.acma.in/images/logo.png" alt="">
            </div>
        </a>

        @php
        
            $company = auth()->guard(session('guard'))->user();
            
            $name = '';
            $email = '';
            if(session('guard')=='company'){
                
                $name = $company->name;
                $email = $company->email;
            } elseif (session('guard') == 'guest') {

                
                $name = $company->username;
                $email = $company->name;
            } elseif(session('guard') == 'web'){

                
                $name = $company->name;
                $email = $company->email;
            }
            $companyInitials = strtoupper(substr($name, 0, 2)) ?? 'DC'; // Default initials if name is empty
        @endphp

        <div class="top-header-right">
            @if(session('guard')=='company')
                <div><a class="me-4 text-white" href="{{route('company.profile')}}"><i class='bx bx-user'></i> Profile</a></div>
            @endif
            <div><a class="me-4 text-white btn btn-danger btn-sm" href="{{ route('company.logout') }}"><i class='bx bx-power-off'></i> Logout</a></div>
           
            <div class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                   <div class="avatar avatar-online">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white text-center" style="width: 40px; height: 40px; line-height: 40px;">
                                {{ $companyInitials }}
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                        <a class="dropdown-item pe-none" href="javascript:void(0);">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary text-white text-center" style="width: 40px; height: 40px; line-height: 40px;">
                                        {{ $companyInitials }}
                                    </div>
                                    </div>
                            </div>
                            </div>
                            <div class="flex-grow-1">
                            <span class="fw-medium d-flex flex-wrap">{{ $name }}</span>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    @if(session('guard')=='company')
                    <li>
                        <a class="dropdown-item" href="{{ route('company.fillUpDetails') }}">
                        <i class='bx bx-user-plus me-2'></i>
                        <span class="align-middle">Account Details</span>
                        </a>
                    </li>
                    @endif
                   
                    <li>
                        <a class="dropdown-item pe-none" href="javascript:void(0);">
                            <i class='bx bxs-envelope me-2'></i>
                        <span class="align-middle">{{ $email }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('company.logout') }}"><i class='bx bx-power-off me-2'></i> <span class="align-middle">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>