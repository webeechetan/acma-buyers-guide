<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Reset Password Form</title>
   

   <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css"
  class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css"
  class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />

   {{-- //bootstrap css --}}
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css">
   <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
 

</head>
<body>
   

   
  <div class="container forgot-password-templates">
   
   <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
         <!-- Register -->
         <div class="card">
            <div class="card-body">
               <!-- Logo -->
               <div class="app-brand justify-content-center">
                  <a href="" class="app-brand-link gap-2">
                  <img src="https://acma.in/img/acma-logo.png" alt="Acma Logo" class="app-brand-logo">
                  </a>
               </div>
               <!-- /Logo -->
               <h2 class="mb-2">Reset Password</h2>
               <p>Enter the email address associated with your account.</p>
               <form id="" class="mb-3" action="{{route('company.ResetPassword.update')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                     <label for="email" class="form-label">Email </label>
                     <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Enter your email" readonly autofocus>
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                    @error('password')
                       <span class="text-danger">{{ $message }}</span>
                    @enderror
                 </div>

                 <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password </label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" placeholder="Confirm Password">
                   
                 </div>
                  <div class="mb-3">
                     <button class="btn btn-primary d-grid w-100" type="submit">Reset Password</button>
                  </div>
               </form>
            </div>
         </div>
         <div>
            <div class="bs-toast toast toast-placement-ex m-2 fade top-0 end-0 hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
               <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold" id="toastHead"></div>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
               <div class="toast-body" id="toastBody"></div>
            </div>
         </div>
         <!-- /Register -->
      </div>
   </div>


</div>
   
  <!-- Main JS -->
  <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/pages-auth.js"></script>

  <script src="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script>


  @if(session()->has('alert'))
      @php
          $alert = Session::get('alert');
          $toastHead = $alert['msg'];
          $toastBody = $alert['body'];
          $toastType = $alert['type'];
      @endphp
      <script>
          $(document).ready(function() {
              toast('{{ $toastHead }}','{{ $toastBody }}','{{ $toastType }}');
          });
      </script>
  @endif
  

</body>
</html>
