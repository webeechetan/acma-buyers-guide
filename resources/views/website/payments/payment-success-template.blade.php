<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Admin Login</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
    <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/config.js"></script>
  </head>
  <body> 
    <?php 


            for ($i = 0; $i < $dataSize; $i++)
                {
                    $information = explode('=', $decryptValues[$i]);
                    if ($i == 3)    $order_status = $information[1];
                }
            
                if ($order_status === "Success") {
                    // echo "
					// 			<br>Thank you for shopping with us.";
                } else if ($order_status === "Aborted") {
                    echo "
									<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
                } else if ($order_status === "Failure") {
                    echo "
										<br>Thank you for shopping with us.However,the transaction has been declined.";
                } else {
                    echo "
											<br>Security Error. Illegal access detected";
                }
            
              
                for ($i = 0; $i < $dataSize; $i++) {
                    $information = explode('=', $decryptValues[$i]);
                    // echo '
					// 										<tr>
					// 											<td>' . $information[0] . '</td>
					// 											<td>' . urldecode($information[1]) . '</td>
					// 										</tr>';
                }
            
               
            
                ?> </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
          <div class="card invoice-preview-card">
            <div class="card-body">
              <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                <div class="mb-xl-0 mb-4">
                  <div class="d-flex svg-illustration mb-3 gap-2">
                    <span class="app-brand-text demo text-body fw-bold"></span>
                  </div>
                </div>
                <div>
                  <h4>Invoice #3492</h4>
                  <h4 class="text text-success">Payment  {{ $order_status }}</h4>
                  <div class="mb-2">
                    <span class="me-1">Date Issues:</span>
                    <span class="fw-medium"><?php echo date('Y-m-d') ?></span>
                  </div>
                  
                </div>
              </div>
            </div>
            <hr class="my-0">
            <div class="card-body">
              <div class="row p-sm-3 p-0">
                <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                  <h6 class="pb-2">Invoice To:</h6>
                 
                </div>
                <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                  <h6 class="pb-2">Bill To:</h6>
                  <table>
                    <tbody>
                     
                      
                      <tr>
                        <td class="pe-3">Country:</td>
                        <td>India</td>
                      </tr>
                      <tr>
                        <td class="pe-3">IBAN:</td>
                        <td>ETD95476213874685</td>
                      </tr>
                      <tr>
                        <td class="pe-3">SWIFT code:</td>
                        <td>BR91905</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table border-top m-0">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Cost</th>
                    <th>Qty</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-nowrap">Subscription Book</td>
                    <td class="text-nowrap">Information for our business Partners</td>
                    <td>600</td>
                    <td>1</td>
                    <td>600</td>
                  </tr>
                  
                  
                  
                  <tr>
                    <td colspan="3" class="align-top px-4 py-5">
                      <p class="mb-2">
                        <span class="me-1 fw-medium">Salesperson:</span>
                        <span>Acma Buyers Guide</span>
                      </p>
                      <span>Thanks for your business</span>
                    </td>
                    <td class="text-end px-4 py-5">
                      <p class="mb-2">Subtotal:</p>
                      
                      <p class="mb-0">Total:</p>
                    </td>
                    <td class="px-4 py-5">
                      <p class="fw-medium mb-2">600</p>
                      
                      <p class="fw-medium mb-0">600</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h4> <?php echo "Thank you for shoppong with us" ?></h4>
           
          </div>
        </div>
       
      </div>
      <!-- Offcanvas -->
      <!-- Send Invoice Sidebar -->
      <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
        <div class="offcanvas-header mb-3">
          <h5 class="offcanvas-title">Send Invoice</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
          <form>
            <div class="mb-3">
              <label for="invoice-from" class="form-label">From</label>
              <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
            </div>
            <div class="mb-3">
              <label for="invoice-to" class="form-label">To</label>
              <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
            </div>
            <div class="mb-3">
              <label for="invoice-subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
            </div>
            <div class="mb-3">
              <label for="invoice-message" class="form-label">Message</label>
              <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
              Thank you for your business, always a pleasure to work with you!
              We have generated a new invoice in the amount of $95.59
              We would appreciate payment of this invoice by 05/11/2021</textarea>
            </div>
            <div class="mb-4">
              <span class="badge bg-label-primary">
                <i class="bx bx-link bx-xs"></i>
                <span class="align-middle">Invoice Attached</span>
              </span>
            </div>
            <div class="mb-3 d-flex flex-wrap">
              <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Send Invoice Sidebar -->
      <!-- Add Payment Sidebar -->
      <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
        <div class="offcanvas-header mb-3">
          <h5 class="offcanvas-title">Add Payment</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
          <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
            <p class="mb-0">Invoice Balance:</p>
            <p class="fw-medium mb-0">$5000.00</p>
          </div>
          <form>
            <div class="mb-3">
              <label class="form-label" for="invoiceAmount">Payment Amount</label>
              <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="payment-date">Payment Date</label>
              <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly">
            </div>
            <div class="mb-3">
              <label class="form-label" for="payment-method">Payment Method</label>
              <select class="form-select" id="payment-method">
                <option value="" selected="" disabled="">Select payment method</option>
                <option value="Cash">Cash</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="Debit Card">Debit Card</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Paypal">Paypal</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="payment-note">Internal Payment Note</label>
              <textarea class="form-control" id="payment-note" rows="2"></textarea>
            </div>
            <div class="mb-3 d-flex flex-wrap">
              <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Add Payment Sidebar -->
      <!-- /Offcanvas -->
    </div>




    <div class="footer-copyright py-3  d-lg-none d-block">
      <div class="container-xxl">
        <div class="row text-center text-md-start">
          <div class="col-md-6">
            <p class="mb-2 mb-sm-0 text-white">© Copyright 2023 ACMA India, All Right Reserved.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p class="mb-0 text-white">Powered By <a href="https://www.webeesocial.com/" class="text-white">Webeesocial</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/pages-auth.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script> @if(session()->has('alert')) @php $alert = Session::get('alert'); $toastHead = $alert['msg']; $toastBody = $alert['body']; $toastType = $alert['type']; @endphp <script>
      $(document).ready(function() {
        toast('{{ $toastHead }}', '{{ $toastBody }}', '{{ $toastType }}');
      });
    </script> @endif
  </body>
</html>