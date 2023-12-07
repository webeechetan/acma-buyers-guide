@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
              <div class="row gy-4 gy-sm-1">
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                    <div>
                      <h3 class="mb-1">24</h3>
                      <p class="mb-0">Companies</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                      <i class="bx bx-user bx-sm"></i>
                    </span>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
            
                
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Recent Added Company List</h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
                <a class="dropdown-item" href="javascript:void(0);">Featured Employees</a>
                <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
                <a class="dropdown-item" href="javascript:void(0);">See All</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/20.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Alberta</h6>
                      <small class="text-muted">UI Designer</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">100h:</h6> <span class="text-muted">138h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="secondary" data-series="85" style="min-height: 37.7px;"><div id="apexchartsbxjf0pnj" class="apexcharts-canvas apexchartsbxjf0pnj apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2994" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2996" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs2995"><clipPath id="gridRectMaskbxjf0pnj"><rect id="SvgjsRect2998" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbxjf0pnj"></clipPath><clipPath id="nonForecastMaskbxjf0pnj"></clipPath><clipPath id="gridRectMarkerMaskbxjf0pnj"><rect id="SvgjsRect2999" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3000" class="apexcharts-radialbar"><g id="SvgjsG3001"><g id="SvgjsG3002" class="apexcharts-tracks"><g id="SvgjsG3003" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3005"><g id="SvgjsG3007" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3008" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703" fill="none" fill-opacity="0.85" stroke="rgba(133,146,163,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703"></path></g><circle id="SvgjsCircle3006" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3009" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3010" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2997" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
</div>
@endsection