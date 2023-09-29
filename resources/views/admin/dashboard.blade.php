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
                      <p class="mb-0">Clients</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                      <i class="bx bx-user bx-sm"></i>
                    </span>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                    <div>
                      <h3 class="mb-1">165</h3>
                      <p class="mb-0">Invoices</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2 me-lg-4">
                      <i class="bx bx-file bx-sm"></i>
                    </span>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none">
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                    <div>
                      <h3 class="mb-1">$2.46k</h3>
                      <p class="mb-0">Paid</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                      <i class="bx bx-check-double bx-sm"></i>
                    </span>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h3 class="mb-1">$876</h3>
                      <p class="mb-0">Unpaid</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2">
                      <i class="bx bx-error-circle bx-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Employee List</h5>
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
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/3.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Paul</h6>
                      <small class="text-muted">Branding</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">121h:</h6> <span class="text-muted">109h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="warning" data-series="70" style="min-height: 37.7px;"><div id="apexchartssovrrxkh" class="apexcharts-canvas apexchartssovrrxkh apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg3011" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3013" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs3012"><clipPath id="gridRectMasksovrrxkh"><rect id="SvgjsRect3015" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasksovrrxkh"></clipPath><clipPath id="nonForecastMasksovrrxkh"></clipPath><clipPath id="gridRectMarkerMasksovrrxkh"><rect id="SvgjsRect3016" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3017" class="apexcharts-radialbar"><g id="SvgjsG3018"><g id="SvgjsG3019" class="apexcharts-tracks"><g id="SvgjsG3020" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3022"><g id="SvgjsG3024" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3025" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 19.425872463491316 36.74804154767268" fill="none" fill-opacity="0.85" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 19.425872463491316 36.74804154767268"></path></g><circle id="SvgjsCircle3023" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3026" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3027" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3014" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/15.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Nannie</h6>
                      <small class="text-muted">iOS Developer</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">112h:</h6> <span class="text-muted">160h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="primary" data-series="25" style="min-height: 37.7px;"><div id="apexcharts5ttv10w0g" class="apexcharts-canvas apexcharts5ttv10w0g apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg3028" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3030" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs3029"><clipPath id="gridRectMask5ttv10w0g"><rect id="SvgjsRect3032" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask5ttv10w0g"></clipPath><clipPath id="nonForecastMask5ttv10w0g"></clipPath><clipPath id="gridRectMarkerMask5ttv10w0g"><rect id="SvgjsRect3033" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3034" class="apexcharts-radialbar"><g id="SvgjsG3035"><g id="SvgjsG3036" class="apexcharts-tracks"><g id="SvgjsG3037" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3039"><g id="SvgjsG3041" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3042" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 46.2469512195122 32.5" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="90" data:value="25" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 46.2469512195122 32.5"></path></g><circle id="SvgjsCircle3040" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3043" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3044" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3031" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/14.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Rodney</h6>
                      <small class="text-muted">iOS Developer</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">125h:</h6> <span class="text-muted">166h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="danger" data-series="75" style="min-height: 37.7px;"><div id="apexcharts7tls8e72" class="apexcharts-canvas apexcharts7tls8e72 apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg3045" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3047" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs3046"><clipPath id="gridRectMask7tls8e72"><rect id="SvgjsRect3049" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7tls8e72"></clipPath><clipPath id="nonForecastMask7tls8e72"></clipPath><clipPath id="gridRectMarkerMask7tls8e72"><rect id="SvgjsRect3050" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3051" class="apexcharts-radialbar"><g id="SvgjsG3052"><g id="SvgjsG3053" class="apexcharts-tracks"><g id="SvgjsG3054" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3056"><g id="SvgjsG3058" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3059" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.753048780487802 32.5" fill="none" fill-opacity="0.85" stroke="rgba(255,62,29,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.753048780487802 32.5"></path></g><circle id="SvgjsCircle3057" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3060" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3061" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3048" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/7.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Martin</h6>
                      <small class="text-muted">Product Designer</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">76h:</h6> <span class="text-muted">89h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="info" data-series="60" style="min-height: 37.7px;"><div id="apexchartsnc7b1cot" class="apexcharts-canvas apexchartsnc7b1cot apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg3062" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3064" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs3063"><clipPath id="gridRectMasknc7b1cot"><rect id="SvgjsRect3066" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknc7b1cot"></clipPath><clipPath id="nonForecastMasknc7b1cot"></clipPath><clipPath id="gridRectMarkerMasknc7b1cot"><rect id="SvgjsRect3067" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3068" class="apexcharts-radialbar"><g id="SvgjsG3069"><g id="SvgjsG3070" class="apexcharts-tracks"><g id="SvgjsG3071" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3073"><g id="SvgjsG3075" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3076" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 24.419744809186703 43.62151715742878" fill="none" fill-opacity="0.85" stroke="rgba(3,195,236,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 24.419744809186703 43.62151715742878"></path></g><circle id="SvgjsCircle3074" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3077" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3078" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3065" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/avatars/18.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                      <h6 class="mb-0">Nancy</h6>
                      <small class="text-muted">PHP Developer</small>
                    </div>
    
                    <div class="user-progress d-flex align-items-center gap-2">
                      <h6 class="mb-0">22h:</h6> <span class="text-muted">45h</span>
                    </div>
                  </div>
    
                  <div class="chart-progress" data-color="warning" data-series="45" style="min-height: 37.7px;"><div id="apexchartsj4zs0lqw" class="apexcharts-canvas apexchartsj4zs0lqw apexcharts-theme-light" style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg3079" width="45" height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3081" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs3080"><clipPath id="gridRectMaskj4zs0lqw"><rect id="SvgjsRect3083" width="71" height="77" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskj4zs0lqw"></clipPath><clipPath id="nonForecastMaskj4zs0lqw"></clipPath><clipPath id="gridRectMarkerMaskj4zs0lqw"><rect id="SvgjsRect3084" width="69" height="79" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3085" class="apexcharts-radialbar"><g id="SvgjsG3086"><g id="SvgjsG3087" class="apexcharts-tracks"><g id="SvgjsG3088" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.501036585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"></path></g></g><g id="SvgjsG3090"><g id="SvgjsG3092" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3093" d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868" fill="none" fill-opacity="0.85" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.640243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="162" data:value="45" index="0" j="0" data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868"></path></g><circle id="SvgjsCircle3091" r="6.4964329268292715" cx="32.5" cy="32.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine3094" x1="0" y1="0" x2="65" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3095" x1="0" y1="0" x2="65" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3082" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Transactions</h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Paypal</small>
                    <h6 class="mb-0">Send money</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Wallet</small>
                    <h6 class="mb-0">Mac'D</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Transfer</small>
                    <h6 class="mb-0">Refund</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Credit Card</small>
                    <h6 class="mb-0">Ordered Food</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Wallet</small>
                    <h6 class="mb-0">Starbucks</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Mastercard</small>
                    <h6 class="mb-0">Ordered Food</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>
@endsection