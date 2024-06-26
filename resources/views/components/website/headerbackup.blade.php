<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xxl">
        <a class="navbar-brand" href="{{route('company.dashboard')}}">
            <div class="logo">
            <img src="https://www.acma.in/images/logo.png" alt="">
            </div>
        </a>


      

        <div class="top-header-right">
            @if(session('guard')=='company')
                <div><a class="me-4 text-white" href="{{route('company.profile')}}"><i class='bx bx-user'></i> Profile</a></div>
            @endif
            <div><a class="me-4 text-white btn btn-danger btn-sm" href="{{ route('company.logout') }}"><i class='bx bx-power-off'></i> Logout</a></div>
           
            <div class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                   <div class="avatar avatar-online">

                   
                        @php
                        $company = auth()->guard(session('guard'))->user();
                        $name = '';
                        if(!$company->name) {
                            $name = $company->username;
                        } else {
                            $name = $company->name;
                        }
                        $companyInitials = strtoupper(substr($name, 0, 2)) ?? 'DC'; // Default initials if name is empty
                        @endphp

                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white text-center" style="width: 40px; height: 40px; line-height: 40px;">
                                {{ $companyInitials }}
                            </div>
                        </div>
                    </div>
                </a>
                
                @php
                $authenticatedCompany = Auth::guard(session('guard'))->user();
                @endphp
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
                            <span class="fw-medium d-flex flex-wrap">{{ $authenticatedCompany->name }}</span>
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
                        <span class="align-middle">{{ $authenticatedCompany->email }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('company.logout') }}"><i class='bx bx-power-off me-2'></i> <span class="align-middle">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link me-4" href="{{route('company.profile')}}"><i class='bx bx-user'></i> Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">

                                
                    <div class="avatar avatar-online">

                        @php
                        $company = auth()->guard(session('guard'))->user();
                        $name = '';
                        if(!$company->name) {
                            $name = $company->username;
                        } else {
                            $name = $company->name;
                        }
                        $companyInitials = strtoupper(substr($company->name, 0, 2)) ?? 'DC'; // Default initials if name is empty
                        @endphp

                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white text-center" style="width: 40px; height: 40px; line-height: 40px;">
                                {{ $companyInitials }}
                            </div>
                        </div>
                    </div>
                </a>

                @php
                $authenticatedCompany = Auth::guard(session('guard'))->user();
                @endphp
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item pe-none" href="javascript:void(0);">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-4">
                            <div class="avatar avatar-online">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary text-white text-center" style="width: 40px; height: 40px; line-height: 40px;">
                                        {{ $companyInitials }}
                                    </div>
                                    </div>
                            </div>
                            </div>
                            <div class="flex-grow-1">
                            <span class="fw-medium d-flex flex-wrap text-wrap">{{ $authenticatedCompany->name }}</span>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('company.fillUpDetails') }}">
                        <i class='bx bx-user-plus me-2'></i>
                        <span class="align-middle">Account Details</span>
                        </a>
                    </li>
                    <li>


                        <a class="dropdown-item" href="">
                            <i class='bx bxs-envelope me-2'></i>
                        <span class="align-middle">{{ $authenticatedCompany->email }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('company.logout') }}"><i class='bx bx-power-off me-2'></i> <span class="align-middle">Logout</span></a>
                    </li>
                </ul>
            </li>
            </ul>
        </div> -->
        </div>
    </nav>
</header>