@extends('admin.layouts.app')

@section('title', ' Admin Dashboard')

@section('content')


<div class="row">
     <div class="col-md-4 mb-3">
      <div class="card">
          <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1 text-primary"><b>{{ $totalCompanyCount }}</b></h3>
              <h5 class="mb-0">Total Companies</h5>
            </div>
            <span class="badge bg-label-secondary rounded p-2 me-sm-4">
              <i class='bx bx-chart bx-sm text-primary'></i>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-4">
        </div>
     </div>
      {{-- Pending Request --}}
      <div class="col-md-4 mb-3">
        <a href=" {{Route('admin.profile.approval')}}">
            <div class="card">
              <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1 text-secondary"><b>{{ $ProfilependingCount }}</b></h3>
                  <h5 class="mb-0">Pending Request </h5>
                </div>
                <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                  <i class='bx bx-chart bx-sm text-secondary'></i>
                </span>
              </div>
            </div>
        </a>
        <hr class="d-none d-sm-block d-lg-none me-4">
      </div>

      {{-- Approved Request --}}
      <div class="col-md-4 mb-3">
        <a href=" {{Route('admin.profile.approval')}}">
        <div class="card">
          <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1 text-success"><b>{{ $ProfileapprovedCount }}</b></h3>
              <h5 class="mb-0">Approved Request</h5>
            </div>
            <span class="badge bg-label-secondary rounded p-2 me-sm-4">
            <i class='bx bx-git-pull-request text-success'></i>
            </span>
          </div>
        </div>
      </a>
        <hr class="d-none d-sm-block d-lg-none me-4">
      </div>
</div>   

<div class="row">
  <div class="region col-md-12">
    <div class="row">
    @foreach ($regionsCount as $region)
        <?php
            $regionName = $region->region;
            $count = $region->count;
        ?>
            <div class="col-md-3 mb-3">
              <div class="card">
                  <div>
                      <div class="d-flex justify-content-between align-items-center">
                          <span class="mb-1 badge bg-primary">
                              @if ($regionName == 'E')
                                  East
                              @elseif ($regionName == 'N')
                                  North
                              @elseif ($regionName == 'W')
                                  West
                              @elseif ($regionName == 'S')
                                  South
                              @else
                                  {{ $regionName }} {{-- Display the original code if not E, N, W, or S --}}
                              @endif
                          </span>
                          <p class="mb-0">{{ $count }}</p>
                      </div>
                  </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-4">
          </div>
    @endforeach
    </div>
  </div>
</div>
{{-- <div class="row">
  <div class="col-md-4">
      <div class="card h-100">
          <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title mb-3 ms-2 text-primary"><b>Set $ Rate</b></h4>
          </div>

          <div class="card-body">
              <form method="post" action="{{route('admin.companies.conversionrate')}}">
                @csrf
                  <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="dollar_rate" class="form-label">Dollar Rate:</label>
                          <input type="text" class="form-control" id="dollar_rate" name="dollar_rate" required>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div> --}}


<div class="row">
  <div class="col-md-12">
      <div class="card h-100">
        <div class="d-flex align-items-center justify-content-between">
          <h4 class="card-title mb-3 ms-2 text-primary"><b>Recently Added Company</b></h4>
        </div>

        <div class="card-body">
          <div class="row">
              @foreach($lastestFiveCompanies as $latestCompany)
                  <div class="col-md-4"> <!-- Adjust the column size based on your requirement -->
                      <div class="d-flex mb-2">
                          <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('admin/') }}/assets/img/icons/unicons/briefcase-round.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex flex-column w-100">
                              <h6 class="mb-0 text-primary">{{$latestCompany->name}}</h6>
                              <small class="text-muted"> Joined on - {{$latestCompany->created_at->format('d- M - Y') }}</small>
                              <p>Email: <span>{{$latestCompany->email}}</span></p>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>
        
      </div>
  </div>
</div>
@endsection