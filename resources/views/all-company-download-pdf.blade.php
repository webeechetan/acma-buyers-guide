
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
            color: rgba(0, 0, 0, 0.1); /* Adjust the color and opacity */
            pointer-events: none; /* Ensure the pseudo-element doesn't interfere with clicks */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: none;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 1px;
            text-align: left;
            border: none;
            height: auto;
        }
        tr {
            border: 1px solid #d8c9cb49;
        }
        .header-row th {
            background-color: #07395c;
            font-weight: bold;
        }

    </style>
</head>
<body>

    
    <div style="text-align: center; margin-bottom: 5px; background-color: #0d2587;">
        <img src="https://www.acma.in/images/logo.png" alt="Header Image" style="max-width: 20%;">
    </div>
    

    <table style="width: 600px; border: none; padding: 0;">
        
        @php 
            $counter = 0;
        @endphp

        @foreach($companies as $company)
        

            @if($counter % 2 == 0) 
                <tr>
                    <td style="width: 300px;">
                        <table>
                            <tr>
                                <td colspan="2" style="color: rgb(66, 66, 212); font-size: 18px;">{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <th>State:</th>
                                <td>{{ $company->contact_details->state }}</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{ $company->contact_details->phone }}</td>
                            </tr>
                            <tr>
                                <th>Fax:</th>
                                <td>{{ $company->contact_details->fax }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $company->email }}</td>
                            </tr>
                            <tr>
                                <th>Website:</th>
                                <td>{{ $company->website }}</td>
                            </tr>
                            <tr>
                                <th>Company Address:</th>
                                <td>{{ $company->contact_details->company_address }}</td>
                            </tr>
                            <tr>
                                <th>Managing Director:</th>
                                <td>{{ $company->key_personnels->managing_director }}</td>
                            </tr>
                            <tr>
                                <th>Chief Executive:</th>
                                <td>{{ $company->key_personnels->chief_executive }}</td>
                            </tr>
                            <tr>
                                <th>Export Incharge</th>
                                <td>{{ $company->key_personnels->export_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Sales Incharge:</th>
                                <td>{{ $company->key_personnels->sales_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Product Manufactured:</th>
                                <td>{{ $company->product_details->products_manufactured }}, {{ $company->product_details->product2 }},
                                    {{ $company->product_details->product3 }}, {{ $company->product_details->product4 }}
                                </td>
                            </tr>
                
                            <tr>
                                <th>Production Incharge:</th>
                                <td>{{  $company->key_personnels->production_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Year Commencing:</th>
                                <td>{{ $company->contact_details->year_commencing }}</td>
                            </tr>
                            <tr>
                                <th>No of Employees:</th>
                                <td>{{  $company->product_details->chief_executive }}</td>
                            </tr>
                        </table> 
                    </td>
                    @else 
                    <td style="width: 300px;">
                        <table>
                            <tr>
                                <td colspan="2" style="color: rgb(66, 66, 212); font-size: 18px;">{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <th>State:</th>
                                <td>{{ $company->contact_details->state }}</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{ $company->contact_details->phone }}</td>
                            </tr>
                            <tr>
                                <th>Fax:</th>
                                <td>{{ $company->contact_details->fax }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $company->email }}</td>
                            </tr>
                            <tr>
                                <th>Website:</th>
                                <td>{{ $company->website }}</td>
                            </tr>
                            <tr>
                                <th>Company Address:</th>
                                <td>{{ $company->contact_details->company_address }}</td>
                            </tr>
                            <tr>
                                <th>Managing Director:</th>
                                <td>{{ $company->key_personnels->managing_director }}</td>
                            </tr>
                            <tr>
                                <th>Chief Executive:</th>
                                <td>{{ $company->key_personnels->chief_executive }}</td>
                            </tr>
                            <tr>
                                <th>Export Incharge</th>
                                <td>{{ $company->key_personnels->export_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Sales Incharge:</th>
                                <td>{{ $company->key_personnels->sales_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Product Manufactured:</th>
                                <td>{{ $company->product_details->products_manufactured }}, {{ $company->product_details->product2 }},
                                    {{ $company->product_details->product3 }}, {{ $company->product_details->product4 }}
                                </td>
                            </tr>
                
                            <tr>
                                <th>Production Incharge:</th>
                                <td>{{  $company->key_personnels->production_in_charge }}</td>
                            </tr>
                            <tr>
                                <th>Year Commencing:</th>
                                <td>{{ $company->contact_details->year_commencing }}</td>
                            </tr>
                            <tr>
                                <th>No of Employees:</th>
                                <td>{{  $company->product_details->chief_executive }}</td>
                            </tr>
                        </table>  
                    </td>
                </tr>
            @endif

            @php
                $counter++;
            @endphp
        @endforeach
    </table>
  
      
</body>
</html>