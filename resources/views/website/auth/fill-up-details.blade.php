
@extends('website.layouts.app')
@section('title','Fill up details')

@push('styles')
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/bs-stepper/bs-stepper.css" />
@endpush

@section('content')

<div class="row justify-content-center sec-space">
            
            <div class="col-md-12 mb-3 mb-md-0">
              <div class="card px-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 justify-content-end">
                      <li class="breadcrumb-item">
                        <a href="{{route('company.dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">Account Details</li>
                    </ol>
                  </nav>
                <div class="tab-pane-header">
                  <h2 id="heading" class="title mb-md-0">Company Details</h2>
                  <p class="text-center mb-0"><b>Fill all form field to go to next step</b></p>  
                </div>
                  <div class="text-center">
                    <span class="auto_save_icons">
                      <span class="auto_save_icon_uploading d-none">
                        <i class="bx bx-refresh me-2"></i>
                        <span class="mt-2">
                          saving...
                        </span>
                      </span>
                      {{-- <span class="auto_save_icon_upload">
                        <i class="bx bx-cloud-upload me-2"></i>
                        <span class="auto_save_uploaded_msg mt-2">saved</span>
                      </span> --}}
                    </span>
                  </div>
                  <form action="{{route('company.fillUpDetailsStore')}}" id="Multi-Steps-form" method="post" class="multi-steps-form" enctype="multipart/form-data">
                    @csrf
                      <div class="progress-bar">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step active" data-title="Contact"></div>
                        <div class="progress-step" data-title="Personal"></div>
                        <!-- <div class="progress-connector"></div> -->
                        <div class="progress-step" data-title="Business"></div>
                        <!-- <div class="progress-connector"></div> -->
                        <div class="progress-step" data-title="Policy"></div>
                      
                      </div>
                      <!-- Company Contact Details --->
                      <div class="form-step active">
                        <div id="company_contact_details" class="form-card content">
                          <div class="row g-3">
                            <div class="col-md-3">
                              <label class="form-label" for="company_name">Company Name</label>
                              <input type="text" id="name" name="name" class="form-control" placeholder="" value="{{ $company->name }}">
                              <x-validation-error name="name"/>
                            </div>
                              <div class="col-md-3">
                                <label class="form-label" for="phone">Company Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="" value="{{ $company_contact_details->phone }}">
                                <x-validation-error name="phone"/>
                              </div>
                              
                              <div class="col-md-3">
                                <label class="form-label" for="fax">Company Fax</label>
                                <input type="text" id="fax" name="fax" class="form-control" placeholder="" value="{{ $company_contact_details->fax }}">
                              </div>
                              
                              <div class="col-md-3">
                                <label class="form-label" for="email">Company Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" value="{{ $company->email }}">
                              </div>
                              
                              <div class="col-md-3">
                                <label class="form-label" for="website">Company Webiste</label>
                                <input type="text" id="website" name="website" class="form-control" placeholder="" value="{{ $company->website }}">
                              </div>
                              <div class="col-md-3">
                                <label class="form-label" for="image"> Company Logo</label>
                                <span class="text text-danger">(size 500 kb max)</span>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*" value="{{ $company_contact_details->image }}" onchange="previewImage()">
                                <x-validation-error name="image" id="imageError"/>
                                <div id="imagePreview" class="preview-image">
                                
                                  @if($company_contact_details->image)
                                  <img src="{{ asset('storage/' . $company_contact_details->image) }}" alt="Company Logo">
                              @endif
                                </div>
                            
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="company_address">Company Address</label>
                                 <textarea id="company_address" name="company_address" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->company_address }}</textarea>
                              </div>
                              <div class="col-md-3">
                                <label class="form-label" for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="" value="{{ $company_contact_details->city }}">
                                </div>

                                <div class="col-md-3">
                                  <label class="form-label" for="state">State</label>
                                  <input type="text" id="state" name="state" class="form-control" placeholder="" value="{{ $company_contact_details->state }}">
                                  </div>

                              <div class="col-md-3">
                              <label class="form-label" for="pin">Company Pin Code</label>
                              <input type="text" id="pin" name="pin" class="form-control" placeholder="" value="{{ $company_contact_details->pin }}">
                              </div>
                                
                                  <div class="col-md-3">
                                    <label class="form-label" for="address2">Address2</label>
                                    <input type="text" id="address2" name="address2" class="form-control" placeholder="" value="{{ $company_contact_details->address2 }}">
                                    </div>

                                    <div class="col-md-3">
                                      <label class="form-label" for="address3">Address3</label>
                                      <input type="text" id="address3" name="address3" class="form-control" placeholder="" value="{{ $company_contact_details->address3 }}">
                                      </div>

                              <div class="col-md-3">
                              <label class="form-label" for="main_address">Main Address</label>
                              {{-- <textarea id="main_address" name="main_address" class="form-control" placeholder=" Enter Your Original Address" rows="1" >{{ $company_contact_details->main_address }}</textarea>
                               --}}

                               <textarea id="mainaddress1" name="mainaddress1" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->mainaddress1 }}</textarea>
                              </div>

                              <div class="col-md-3">
                                <label class="form-label" for="main_address">Main Address 2</label>
                                {{-- <textarea id="main_address2" name="main_address2" class="form-control" placeholder="Enter Your Original Address2" rows="1" >{{ $company_contact_details->main_address2 }}</textarea> --}}
                                <textarea id="mainaddress2" name="mainaddress2" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->mainaddress2 }}</textarea>
                                </div>

                                <div class="col-md-3">
                                  <label class="form-label" for="plant_pin">Main City</label>
                                  <input type="text" id="maincity" name="maincity" class="form-control" placeholder="" value="{{ $company_contact_details->maincity }}">
                                  </div>


                                  
                                  <div class="col-md-3">
                                    <label class="form-label" for="main_state">Main State</label>
                                    <input type="text" id="mainstate" name="mainstate" class="form-control" placeholder="" value="{{ $company_contact_details->mainstate }}">
                                  </div>
                                  
                                  <div class="col-md-3">
                                  <label class="form-label" for="plant_pin">Plant Pin</label>
                                  <input type="text" id="plant_pin" name="plant_pin" class="form-control" placeholder="" value="{{ $company_contact_details->plant_pin }}">
                                  </div>
                                  
                              <div class="col-md-3">
                              <label class="form-label" for="plant_phone">Plant Phone</label>
                              <input type="text" id="plant_phone" name="plant_phone" class="form-control" placeholder="" value="{{ $company_contact_details->plant_phone }}">
                              </div>

                              <div class="col-md-3">
                              <label class="form-label" for="plant_fax">Plant Fax</label>
                              <input type="text" id="plant_fax" name="plant_fax" class="form-control" placeholder="" value="{{ $company_contact_details->plant_fax }}">
                              </div>

                              <div class="col-md-3">
                              <label class="form-label" for="plant_email">Plant Email</label>
                              <input type="text" id="plant_email" name="plant_email" class="form-control" placeholder="" value="{{ $company_contact_details->plant_email }}">
                              </div>

                            

                              <div class="col-md-3">
                              <label class="form-label" for="overseas_plant_1">Overseas Plant Address</label>
                              <textarea id="overseas_plant_1" type="text" name="overseas_plant_1" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->overseas_plant_1 }}</textarea>
                              </div>

                              
                              <div class="col-md-3">
                                <label class="form-label" for="overseas_plant2">Overseas Plant Address2</label>
                                <textarea id="overseas_plant_2" type="text" name="overseas_plant_2" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->overseas_plant_2 }}</textarea>
                              </div>


                              <div class="col-md-3">
                                <label class="form-label" for="overseas_plant_3">Overseas Plant Address3</label>
                                <textarea id="overseas_plant_3" type="text" name="overseas_plant_3" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->overseas_plant_3 }}</textarea>
                              </div>

                              <div class="col-md-3">
                                <label class="form-label" for="otheraddress">Other Address</label>
                                <textarea id="otheraddress" type="text" name="otheraddress" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->otheraddress }}</textarea>
                              </div>

                              <div class="col-md-3">
                                <label class="form-label" for="otheraddress_1">Other Address 1</label>
                                <textarea id="otheraddress_1" name="otheraddress_1" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->otheraddress_1 }}</textarea>
                              </div>

                              <div class="col-md-3">
                              <label class="form-label" for="other_plant_address">Other Plant Address</label>
                              <textarea id="otherplant_address1" name="otherplant_address1" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->otherplant_address1 }}</textarea>
                              </div>

                              <div class="col-md-3">
                                <label class="form-label" for="other_plant_address">Other Plant Address 2</label>
                                <textarea id="otherplant_address2" name="otherplant_address2" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->otherplant_address2 }}</textarea>
                                </div>


                                <div class="col-md-3">
                                  <label class="form-label" for="other_plant_address">Other Plant Address 3</label>
                                  <textarea id="otherplant_address3" name="otherplant_address3" class="form-control" placeholder="" rows="1" >{{ $company_contact_details->otherplant_address3 }}</textarea>
                                  </div>

                                  <div class="col-md-4">
                                    <label class="form-label" for="yearcommencing">Year Commencing</label>
                                    <input type="text" id="year_commencing" name="year_commencing" class="form-control" placeholder="" value="{{ $company_contact_details->year_commencing }}">
                                    </div>
                             
                            </div>
                          </div>
                      </div>
                      <!--- Contact Details of key Personal --->
                      <div class="form-step">
                        <div id="contact_details_of_key_personnel" class="form-card content">
                          <div class="row g-3">
                            <div class="col-md-3">
                              <label class="form-label" for="managing_director">Managing Director</label>
                              <input type="text" id="managing_director" name="managing_director" class="form-control" placeholder="" value="{{ $company_key_personnels->managing_director }}">
                            </div>
                           

                            <div class="col-md-3">
                              <label class="form-label" for="chief_executive">Chief Executive</label>
                              <input type="text" id="chief_executive" name="chief_executive" class="form-control" placeholder="" value="{{ $company_key_personnels->chief_executive }}">
                            </div>
                            

                            <div class="col-md-3">
                              <label class="form-label" for="sales_in_charge">sales incharge</label>
                              <input type="Enter Sales Incharge Name" id="sales_in_charge" name="sales_in_charge" class="form-control" placeholder="" value="{{ $company_key_personnels->sales_in_charge }}">
                            </div>
                           

                            <div class="col-md-3">
                              <label class="form-label" for="export_in_charge">export incharge</label>
                              <input type="text" id="export_in_charge" name="export_in_charge" class="form-control" placeholder="" value="{{ $company_key_personnels->export_in_charge }}">
                            </div>
                            <div class="col-md-3">
                              <label class="form-label" for="production_in_charge">production incharge</label>
                              <input type="text" id="production_in_charge" name="production_in_charge" class="form-control" placeholder="" value="{{ $company_key_personnels->production_in_charge }}">
                            </div>
                            <div class="col-md-3">
                              <label class="form-label" for="quality_in_charge"> Quality incharge</label>
                              <input type="text" id="quality_in_charge" name="quality_in_charge" class="form-control" placeholder="" value="{{ $company_key_personnels->quality_in_charge }}">
                            </div>
                            <div class="col-md-3">
                              <label class="form-label" for="rd_in_charge">Hrd incharge</label>
                              <input type="text" id="hrd_incharge" name="hrd_incharge" class="form-control" placeholder="" value="{{ $company_key_personnels->hrd_incharge }}">
                            </div>

                            <div class="col-md-3">
                              <label class="form-label" for="rnd_incharge">Rnd incharge</label>
                              <input type="text" id="rnd_incharge" name="rnd_incharge" class="form-control" placeholder="" value="{{ $company_key_personnels->rnd_incharge }}">
                            </div>
                           

                          </div>
                           
                          </div>
                      </div>
                       <!--- Contact Of Business Details ---->
                      <div class="form-step">
                        <div id="business_details" class="form-card content">
                            <div class="row g-3">
                             

                            <div class="col-md-4">
                                <label class="form-label" for="REGION">Region</label>
                                <select id="region" name="region" class="form-control">
                                  <option value="" {{ $company_key_personnels->region == '' ? 'selected' : '' }}>Select Region</option>
                                    <option value="E" {{ $company_key_personnels->region == 'E' ? 'selected' : '' }}>East</option>
                                    <option value="W" {{ $company_key_personnels->region == 'W' ? 'selected' : '' }}>West</option>
                                    <option value="N" {{ $company_key_personnels->region == 'N' ? 'selected' : '' }}>North</option>
                                    <option value="S" {{ $company_key_personnels->region == 'S' ? 'selected' : '' }}>South</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                              <label class="form-label" for="ProductsManufactured">Products Manufactured</label>
                              <input type="text" id="products_manufactured" name="products_manufactured" class="form-control" placeholder="" value="{{ $company_product_details->products_manufactured }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Product2">Product 2</label>
                              <input type="text" id="product2" name="product2" class="form-control" placeholder="" value="{{ $company_product_details->product2 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Product3">Product 3</label>
                              <input type="text" id="product3" name="product3" class="form-control" placeholder="" value="{{ $company_product_details->product3 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Product4">Product 4</label>
                              <input type="text" id="product4" name="product4" class="form-control" placeholder="" value="{{ $company_product_details->product4 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Scale">Scale</label>
                              <input type="text" id="scale" name="scale" class="form-control" placeholder="" value="{{$company_product_details->scale}}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="ssi_info">SSI Info</label>
                              <input type="text" id="ssi_info" name="ssi_info" class="form-control" placeholder="" value="{{ $company_product_details->ssi_info}}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Trademark">Trademark</label>
                              <input type="text" id="trademark" name="trademark" class="form-control" placeholder="" value="{{ $company_product_details->trademark }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="total_capital">Total Capital</label>
                              <input type="text" id="total_capital" name="total_capital" class="form-control" placeholder="" value="{{ $company_product_details->total_capital }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="net_investment_plant">Net Investment Plant</label>
                              <input type="text" id="net_investment_plant" name="net_investment_plant" class="form-control" placeholder="" value="{{ $company_product_details->net_investment_plant }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="total_investment_plant">Total Investment Plant</label>
                              <input type="text" id="total_investment_plant" name="total_investment_plant" class="form-control" placeholder="" value="{{ $company_product_details->total_investment_plant }}">
                            </div>


                            <div class="col-md-4">
                              <label class="form-label" for="Update_Date">Update Year</label>
                              <input type="text" id="update_date" name="update_date" class="form-control" placeholder="" value="{{ $company_key_personnels->update_date }}">
                            </div>


                            <div class="col-md-4">
                              <label class="form-label" for="sales_turnover">Sales Turnover(INR)</label>
                              <input type="text" id="sales_turnover" name="sales_turnover" class="form-control" placeholder="" value="{{ $company_product_details->sales_turnover }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="S_TURN">Sales Turnover(in $ Mln)</label>
                              <input type="text" id="s_turn_in" name="s_turn_in" class="form-control" placeholder="" value="{{ $company_product_details->s_turn_in }}">
                            </div>
                            

                    

                            <div class="col-md-4">
                              <label class="form-label" for="export_turn-02-03">Export Turnover(INR)</label>
                              <input type="text" id="export_turn_02_03" name="export_turn_02_03" class="form-control" placeholder="" value="{{  $company_product_details->export_turn_02_03 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Exports(in $ Mln)">Exports Turnover(in $ Mln)</label>
                              <input type="text" id="exports_in_mln" name="exports_in_mln" class="form-control" placeholder="" value="{{ $company_product_details->exports_in_mln }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="no_of_emps">Number of Employees</label>
                              <input type="number" id="number_of_employees" name="number_of_employees" class="form-control" placeholder="" value="{{ $company_product_details->number_of_employees }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Skilled">Skilled</label>
                              <input type="text" id="skilled" name="skilled" class="form-control" placeholder="" value="{{ $company_product_details->skilled }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="SemiSkilled">Semi-Skilled</label>
                              <input type="text" id="semi_skilled" name="semi_skilled" class="form-control" placeholder="" value="{{ $company_product_details->semi_skilled }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="UnSkilled">Un-Skilled</label>
                              <input type="text" id="un_skilled" name="un_skilled" class="form-control" placeholder="" value="{{$company_product_details->un_skilled }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Contractual">Contractual</label>
                              <input type="text" id="contractual" name="contractual" class="form-control" placeholder="" value="{{$company_product_details->contractual }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="Manage&Above">Manager & Above</label>
                              <input type="text" id="management_above" name="management_above" class="form-control" placeholder="" value="{{$company_product_details->management_above }}">
                            </div>
                             
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB1">Foreign Collab 1</label>
                              <input type="text" id="f_collab1" name="f_collab1" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab1 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD1">Foregin Product 1</label>
                              <input type="text" id="f_prod1" name="f_prod1" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->f_prod1 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE1">Nature 1</label>
                              <input type="text" id="nature1" name="nature1" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->nature1 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per1">Percentage % 1</label>
                              <input type="text" id="per1" name="per1" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per1 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB2">Foreign Collab 2</label>
                              <input type="text" id="f_collab2" name="f_collab2" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->f_collab2 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD2">Foregin Product 2</label>
                              <input type="text" id="f_prod2" name="f_prod2" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod2 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE2">Nature 2</label>
                              <input type="text" id="nature2" name="nature2" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature2}}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per2">Percentage % 2</label>
                              <input type="text" id="per2" name="per2" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per2 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB3">Foreign Collab 3</label>
                              <input type="text" id="f_collab3" name="f_collab3" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab3 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD3">Foregin Product 3</label>
                              <input type="text" id="f_prod3" name="f_prod3" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod3 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE3">Nature 3</label>
                              <input type="text" id="nature3" name="nature3" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature3 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per3">Percentage % 3</label>
                              <input type="text" id="per3" name="per3" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per3 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB4">Foreign Collab 4</label>
                              <input type="text" id="f_collab4" name="f_collab4" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab4 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD4">Foregin Product 4</label>
                              <input type="text" id="f_prod4" name="f_prod4" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod4 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE4">Nature 4</label>
                              <input type="text" id="nature4" name="nature4" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature4 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per4">Percentage % 4</label>
                              <input type="text" id="per4" name="per4" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per4}}">
                            </div>

                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB5">Foreign Collab 5</label>
                              <input type="text" id="f_collab5" name="f_collab5" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab5}}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD5">Foregin Product 5</label>
                              <input type="text" id="f_prod5" name="f_prod5" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod5 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE5">Nature 5</label>
                              <input type="text" id="nature5" name="nature5" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature5 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per5">Percentage % 5</label>
                              <input type="text" id="per5" name="per5" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per5 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB6">Foreign Collab 6</label>
                              <input type="text" id="f_collab6" name="f_collab6" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab6 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD6">Foregin Product 6</label>
                              <input type="text" id="f_prod6" name="f_prod6" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod6 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE6">Nature 6</label>
                              <input type="text" id="nature6" name="nature6" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature6 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per6">Percentage % 6</label>
                              <input type="text" id="per6" name="per6" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per6 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB7">Foreign Collab 7</label>
                              <input type="text" id="f_collab7" name="f_collab7" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab7 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD7">Foregin Product 7</label>
                              <input type="text" id="f_prod7" name="f_prod7" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod7 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE7">Nature 7</label>
                              <input type="text" id="nature7" name="nature7" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature7 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per7">Percentage % 7</label>
                              <input type="text" id="per7" name="per7" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per7 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB8">Foreign Collab 8</label>
                              <input type="text" id="f_collab8" name="f_collab8" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab8 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD8">Foregin Product 8</label>
                              <input type="text" id="f_prod8" name="f_prod8" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod8 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE8">Nature 8</label>
                              <input type="text" id="nature8" name="nature8" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature8 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per8">Percentage % 8</label>
                              <input type="text" id="per8" name="per8" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per8 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB9">Foreign Collab 9</label>
                              <input type="text" id="f_collab9" name="f_collab9" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab9}}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD9">Foregin Product 9</label>
                              <input type="text" id="f_prod9" name="f_prod9" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod9 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE9">Nature 9</label>
                              <input type="text" id="nature9" name="nature9" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature9 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per9">Percentage % 9</label>
                              <input type="text" id="per9" name="per9" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per9 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_COLLAB10">Foreign Collab 10</label>
                              <input type="text" id="f_collab10" name="f_collab10" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_collab10 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="F_PROD10">Foregin Product 10</label>
                              <input type="text" id="f_prod10" name="f_prod10" class="form-control" placeholder="" value="{{$company_foreign_collaboration->f_prod10 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="NATURE10">Nature 10</label>
                              <input type="text" id="nature10" name="nature10" class="form-control" placeholder="" value="{{$company_foreign_collaboration->nature10 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="per10">Percentage % 10</label>
                              <input type="text" id="per10" name="per10" class="form-control" placeholder="" value="{{$company_foreign_collaboration->per10 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="MEMBER">Membership Type</label>
                              <input type="text" id="member" name="member" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->member }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="iso">ISO</label>
                              <input type="text" id="iso" name="iso" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->iso }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="isodate">ISO Date</label>
                              <input type="text" id="isodate" name="isodate" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->isodate }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="isoagency">ISO Agency</label>
                              <input type="text" id="isoagency" name="isoagency" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->isoagency }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="qs">QS</label>
                              <input type="text" id="qs" name="qs" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->qs }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="qsdate">QS Date</label>
                              <input type="text" id="qsdate" name="qsdate" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->qsdate }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="qsagency">QS Agency</label>
                              <input type="text" id="qsagency" name="qsagency" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->qsagency }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="iso14">ISO 14</label>
                              <input type="text" id="iso14" name="iso14" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->iso14 }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="iso14date">ISO 14 Date</label>
                              <input type="text" id="iso14date" name="iso14date" class="form-control" placeholder="" value="{{$company_foreign_collaboration->iso14date }}">
                            </div>
                            
                            <div class="col-md-4">
                              <label class="form-label" for="iso14agency">ISO 14 Agency</label>
                              <input type="text" id="iso14agency" name="iso14agency" class="form-control" placeholder="" value="{{$company_foreign_collaboration->iso14agency }}">
                            </div>
                            
                            <div class="col-md-12">
                              <label class="form-label" for="ts">Technical Standard</label>
                              <input type="text" id="ts" name="ts" class="form-control" placeholder="" value="{{$company_foreign_collaboration->ts}}">
                            </div>
                            
                                                          
                            
                              {{-- //////////// Above New Excel fields added by AJ on 18 oct -2023////////////// --}}

                             
                            </div>
                          </div>
                      </div>

                      <div class="form-step">
                        <div id="contact_details_of_key_personnel" class="form-card content">
                          <div class="row g-3">



                            <div class="col-md-2">
                              <label class="form-label" for="tsdate">TS Date</label>
                              <input type="text" id="tsdate" name="tsdate" class="form-control" placeholder="" value="{{$company_foreign_collaboration->tsdate }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="tsagency">TS Agency</label>
                              <input type="text" id="tsagency" name="tsagency" class="form-control" placeholder="" value="{{$company_foreign_collaboration->tsagency }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DemingAward">Deming Award</label>
                              <input type="text" id="deming_award" name="deming_award" class="form-control" placeholder="" value="{{$company_foreign_collaboration->deming_award }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="JapanQualityMedal">Japan Quality Medal</label>
                              <input type="text" id="japan_quality_medal" name="japan_quality_medal" class="form-control" placeholder="" value="{{$company_foreign_collaboration->japan_quality_medal }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="emark">E-Mark</label>
                              <input type="text" id="emark" name="emark" class="form-control" placeholder="" value="{{ $company_foreign_collaboration->emark }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="bismark">Bismark</label>
                              <input type="text" id="bismark" name="bismark" class="form-control" placeholder="" value="{{$company_foreign_collaboration->bismark }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="other_mark1">Other Mark 1</label>
                              <input type="text" id="other_mark1" name="other_mark1" class="form-control" placeholder="" value="{{$company_product_details->other_mark1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="other_mark2">Other Mark 2</label>
                              <input type="text" id="other_mark2" name="other_mark2" class="form-control" placeholder="" value="{{$company_product_details->other_mark2}}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMesticOE">DOMesticOE</label>
                              <input type="text" id="domesticoe" name="domesticoe" class="form-control" placeholder="" value="{{$company_product_details->domesticoe }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMesticOE1">DOMesticOE1</label>
                              <input type="text" id="domesticoe1" name="domesticoe1" class="form-control" placeholder="" value="{{$company_product_details->domesticoe1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMesticOE2">DOMesticOE2</label>
                              <input type="text" id="domesticoe2" name="domesticoe2" class="form-control" placeholder="" value="{{$company_product_details->domesticoe2 }}">
                            </div>

                            <div class="col-md-2">
                              <label class="form-label" for="DOMesticOE3">DOMesticOE3</label>
                              <input type="text" id="domesticoe3" name="domesticoe3" class="form-control" placeholder="" value="{{$company_product_details->domesticoe3 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMesticOE4">DOMesticOE4</label>
                              <input type="text" id="domesticoe4" name="domesticoe4" class="form-control" placeholder="" value="{{$company_product_details->domesticoe4 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMestic_tier_oe">DOMestic Tier OE</label>
                              <input type="text" id="domestic_tier_oe" name="domestic_tier_oe" class="form-control" placeholder="" value="{{$company_product_details->domestic_tier_oe }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMestic_tier_oe1">DOMestic Tier OE1</label>
                              <input type="text" id="domestic_tier_oe1" name="domestic_tier_oe1" class="form-control" placeholder="" value="{{$company_product_details->domestic_tier_oe1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMestic_tier_oe2">DOMestic Tier OE2</label>
                              <input type="text" id="domestic_tier_oe2" name="domestic_tier_oe2" class="form-control" placeholder="" value="{{$company_product_details->domestic_tier_oe2 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="DOMestic_tier_oe3">DOMestic Tier OE3</label>
                              <input type="text" id="domestic_tier_oe3" name="domestic_tier_oe3" class="form-control" placeholder="" value="{{$company_product_details->domestic_tier_oe3 }}">
                            </div>

                            <div class="col-md-2">
                              <label class="form-label" for="CUSINT1">CUSINT1</label>
                              <input type="text" id="cusint1" name="cusint1" class="form-control" placeholder="" value="{{$company_product_details->cusint1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="CUSINT2">CUSINT2</label>
                              <input type="text" id="cusint2" name="cusint2" class="form-control" placeholder="" value="{{$company_product_details->cusint2 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="CUSINT3">CUSINT3</label>
                              <input type="text" id="cusint3" name="cusint3" class="form-control" placeholder="" value="{{$company_product_details->cusint3 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="CUSINT_tier1">CUSINT_tier1</label>
                              <input type="text" id="cusint_tier1" name="cusint_tier1" class="form-control" placeholder="" value="{{$company_product_details->cusint_tier1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="CUSInt_tier2">CUSInt_tier2</label>
                              <input type="text" id="cusint_tier2" name="cusint_tier2" class="form-control" placeholder="" value="{{$company_product_details->cusint_tier2 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="CUSInt_tier3">CUSInt_tier3</label>
                              <input type="text" id="cusint_tier3" name="cusint_tier3" class="form-control" placeholder="" value="{{$company_product_details->cusint_tier3 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="AFMKT1">AFMKT1</label>
                              <input type="text" id="afmkt1" name="afmkt1" class="form-control" placeholder="" value="{{$company_product_details->afmkt1 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="AFMKT2">AFMKT2</label>
                              <input type="text" id="afmkt2" name="afmkt2" class="form-control" placeholder="" value="{{$company_product_details->afmkt2 }}">
                            </div>
                            
                            <div class="col-md-2">
                              <label class="form-label" for="AFMKT3">AFMKT3</label>
                              <input type="text" id="afmkt3" name="afmkt3" class="form-control" placeholder="" value="{{$company_product_details->afmkt3 }}">
                            </div>

                          </div>
                        </div>
                      </div>
                  
                  
                    <div class="form-navigation mt-3 pt-3 border-top">
                      <button type="button" class="btn btn-primary" id="prev">Previous</button>
                      <button type="button" onclick="validateAndProceed()" class="btn btn-primary ms-auto" id="next">Next</button>
                      <button type="submit" class="btn btn-success" id="submit" style="display: none;">Update</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
      
        <div class="bs-toast toast toast-placement-ex m-2 fade  top-0 end-0 hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold" id="toastHead"></div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastBody"></div>
        </div>
 
@endsection

@push('scripts')
 
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin/') }}/assets/js/pages-auth.js"></script>

  <script src="{{ asset('admin/') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/select2/select2.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/form-wizard-icons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script>
    $(document).ready(function(){
      


      //$('#sales_turnover').inputmask("99-99999999");

      $(".auto_save_uploaded_msg").hide();

        function autoSave(){
          
            let formData = new FormData($('#Multi-Steps-form')[0]);
            formData.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('company.fillUpDetailsStore') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {

                  if(!response.success){
                    toastr.error(response.message);
                  }else{
                    $(".auto_save_icon_uploading").removeClass('bx-fade-up');
                    $(".auto_save_icon_uploading").addClass('d-none');
                    $(".auto_save_icon_upload").removeClass('d-none');
                    $(".auto_save_uploaded_msg").show();
                    setTimeout(() => {
                      $(".auto_save_uploaded_msg").hide();
                    }, 1000);
                  }
                    
                },
                error: function (response) {

                }
            })
        }

        // setInterval(() => {
        //     autoSave();
        //     $(".auto_save_icon_upload").addClass('d-none');
        //     $(".auto_save_icon_uploading").removeClass('d-none');
        //     $(".auto_save_icon_uploading").addClass('bx-fade-up');
        // }, 5000);

        document.getElementById('image').addEventListener('change', handleFile);
          function handleFile(event) {
            const errorSpan = document.getElementById('imageError'); // Assuming you have an element with id 'imageError'
            const file = event.target.files[0];
            if(file) {
              const fileSizeInKB = file.size/1024;
              if(fileSizeInKB >500) {
                 alert('File size should be less than 500 kb');
                  document.getElementById('image').value = '';
                  return;
              }else{
                console.log('');
              }
            }
          }

    });
    $(document).ready(function() {
        var currentStep = 0;
        var formSteps = $('.form-step');
        var formNavigation = $('.form-navigation');
        var progressBar = $('#progress');
        var prevButton = $('#prev');
        var nextButton = $('#next');
        var submitButton = $('#submit');
        var progressSteps = $('.progress-step');

        function showStep(step) {
          formSteps.removeClass('active');
          $(formSteps[step]).addClass('active');

          progressSteps.removeClass('active'); // Remove active class from all progress steps
          for (var i = 0; i <= step; i++) {
            $(progressSteps[i]).addClass('active'); // Add active class to progress steps up to the current step
          }

          if (step === 0) {
            prevButton.hide();
          } else {
            prevButton.show();
          }

          if (step === formSteps.length - 1) {
            nextButton.hide();
            submitButton.show();
          } else {
              nextButton.show();
              submitButton.hide();
            }

        var progress = (step / (formSteps.length - 1)) * 100;
        progressBar.width(progress + "%");
        progressBar.attr('aria-valuenow', progress);
      }

        nextButton.click(function() {
          if (currentStep < formSteps.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        });

        prevButton.click(function() {
        if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
        }
      });

      showStep(currentStep);

      
   });


      function previewImage() 
        {
            var input = document.getElementById('image');
            var preview = document.getElementById('imagePreview');
            var image = new Image();
            image.src = URL.createObjectURL(input.files[0]);
            image.onload = function () {
                preview.innerHTML = '';
                preview.appendChild(image);
            };
        }  

      
        document.addEventListener('DOMContentLoaded', function() {
            // Get references to the input fields

            var inr  = @json($settings->dollar_price);
            var conversionPrice = JSON.parse(JSON.stringify(inr));

         
            var salesTurnoverInput = document.getElementById('sales_turnover');
            var sTurnInInput = document.getElementById('s_turn_in');

            // Add an event listener to the sales_turnover input
            salesTurnoverInput.addEventListener('input', function() {
                // Get the value entered in sales_turnover
                var salesTurnoverValue = parseFloat(salesTurnoverInput.value);

                // Check if the entered value is a valid number
                if (!isNaN(salesTurnoverValue)) {
                    // Convert sales turnover to rupees and then to dollars
                    var sTurnInValue = (salesTurnoverValue * 100000 * (1/conversionPrice)) / 1000000;

                    // Update the value of s_turn_in input
                    sTurnInInput.value = sTurnInValue.toFixed(2); // Round to 2 decimal places
                } else {
                    // Handle the case when the entered value is not a valid number
                    sTurnInInput.value = ''; // Clear the value in s_turn_in
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
        // Get references to the input fields

          var inr  = @json($settings->dollar_price);
          var conversionPrice = JSON.parse(JSON.stringify(inr));

          var exportTurnoverInput = document.getElementById('export_turn_02_03');
          var exportsInMlnInput = document.getElementById('exports_in_mln');

        // Add an event listener to the export_turn_02_03 input
          exportTurnoverInput.addEventListener('input', function() {
              // Get the value entered in export_turn_02_03
              var exportTurnoverValue = parseFloat(exportTurnoverInput.value);

              // Check if the entered value is a valid number
              if (!isNaN(exportTurnoverValue)) {
                  // Convert export turnover to million dollars
                  var exportsInMlnValue = (exportTurnoverValue * 100000 * (1/conversionPrice)) / 1000000; // Assuming 1 lakh = 0.01 million

                  // Update the value of exports_in_mln input
                  exportsInMlnInput.value = exportsInMlnValue.toFixed(2); // Round to 2 decimal places
              } else {
                  // Handle the case when the entered value is not a valid number
                  exportsInMlnInput.value = ''; // Clear the value in exports_in_mln
              }
          });
    });

        
</script>
@endpush

