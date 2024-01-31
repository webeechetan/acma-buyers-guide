<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Company Details</title>
            <style>
                    body::before {
                        content: 'ACMA';
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%) rotate(-45deg);
                        font-size: 8em;
                        color: rgba(0, 0, 0, 0.1);
                        pointer-events: none;
                    }
                    table{
                        border-collapse: collapse;
                    }
                    .container-fluid
                    {
                            text-align: center;
                            margin-bottom: 5px;
                            background-color: #0D2587;
                    }
                    .logo {
                        max-width: 20%;
                    }
                    .company-details div{
                        border: 1px solid #eee;
                        padding: 10px;
                    }
                    .company-details .data-title{
                        font-weight: 600;
                        width: 100px;
                        word-wrap: break-word;
                        padding-right: 10px;
                    }
                    .table:nth-child(odd) .company-title{
                        background-color: #C7F6C7;
                        font-weight: 700;
                    }
                    .table:nth-child(even) .company-title{
                        background-color: #FBEEE6;
                        font-weight: 700;
                    }
                    .table-container{
                        margin-top: 10px;
                    }
                    .table{
                        width: 100%;
                        margin-bottom: 20px;
                    }
            </style>
    </head>
<body>
    <div class="container-fluid">
        <img class="logo" src="https://www.acma.in/images/logo.png" alt="Header Image">
    </div>
    <div>
    <div class="table-container">
        @php
            $counter = 0;
        @endphp
         @foreach($companies as $company)
        @if($counter % 2 == 0)
            <div class="table">
                <div class="company-details">
                    <div class="company-title" style="font-size: 18px;">{{ $company->name }}</div>
                    <div><span class="data-title">State:</span> {{ $company->contact_details->state }}</div>
                    <div><span class="data-title">Phone:</span> <a href="tel:{{ $company->contact_details->phone }}">{{ $company->contact_details->phone }}</a></div>
                    <div><span class="data-title">Fax:</span><a>{{ $company->contact_details->fax }}</a></div>
                    <div><span class="data-title">Email: </span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></div>
                    <div><span class="data-title">Email: </span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></div>
                    <div><span class="data-title">Website:</span> {{ $company->website }}</div>
                    <div><span class="data-title">Company Address:</span> {{ $company->contact_details->company_address }}</div>
                    <div><span class="data-title">Managing Director:</span> {{ $company->key_personnels->managing_director }}</div>
                    <div><span class="data-title">Chief Executive:</span> {{ $company->key_personnels->chief_executive }}</div>
                    <div><span class="data-title">Export Incharge:</span> {{ $company->key_personnels->export_in_charge }}</div>
                    <div><span class="data-title">Sales Incharge:</span> {{ $company->key_personnels->sales_in_charge }}</div>
                    <div><span class="data-title">Product Manufactured:</span> {{ $company->product_details->products_manufactured }},
                        {{ $company->product_details->product2 }},
                        {{ $company->product_details->product3 }}, {{ $company->product_details->product4 }}
                    </div>
                    <div><span class="data-title">Production Incharge:</span> {{ $company->key_personnels->production_in_charge }}</div>
                    <div><span class="data-title">Year Commencing:</span> {{ $company->contact_details->year_commencing }}</div>
                    <div><span class="data-title">No of Employees:</span> {{ $company->product_details->chief_executive }}</div>
                    <!-- Add more divs for other details -->
                </div>
            </div>
        @else
        <div class="table">
                <div class="company-details">
                    <div class="company-title" style="font-size: 18px;">{{ $company->name }}</div>
                    <div><span class="data-title">State:</span> {{ $company->contact_details->state }}</div>
                    <div><span class="data-title">Phone:</span> <a href="tel:{{ $company->contact_details->phone }}">{{ $company->contact_details->phone }}</a></div>
                    <div><span class="data-title">Fax:</span><a>{{ $company->contact_details->fax }}</a></div>
                    <div><span class="data-title">Email: </span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></div>
                    <div><span class="data-title">Website:</span> {{ $company->website }}</div>
                    <div><span class="data-title">Company Address:</span> {{ $company->contact_details->company_address }}</div>
                    <div><span class="data-title">Managing Director:</span> {{ $company->key_personnels->managing_director }}</div>
                    <div><span class="data-title">Chief Executive:</span> {{ $company->key_personnels->chief_executive }}</div>
                    <div><span class="data-title">Export Incharge:</span> {{ $company->key_personnels->export_in_charge }}</div>
                    <div><span class="data-title">Sales Incharge:</span> {{ $company->key_personnels->sales_in_charge }}</div>
                    <div><span class="data-title">Product Manufactured:</span> {{ $company->product_details->products_manufactured }},
                        {{ $company->product_details->product2 }},
                        {{ $company->product_details->product3 }}, {{ $company->product_details->product4 }}
                    </div>
                    <div><span class="data-title">Production Incharge:</span> {{ $company->key_personnels->production_in_charge }}</div>
                    <div><span class="data-title">Year Commencing:</span> {{ $company->contact_details->year_commencing }}</div>
                    <div><span class="data-title">No of Employees:</span> {{ $company->product_details->chief_executive }}</div>
                    <!-- Add more divs for other details -->
                </div>
            </div>
        @endif
        @php
            $counter++;
        @endphp
    @endforeach
</div>
</div>
</body>
</html>

