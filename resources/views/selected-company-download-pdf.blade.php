
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: none;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 4px;
            text-align: left;
            border: none;
        }
        tr {
            border: 1px solid #e4092249;
            background: url('/view/watermark_img.jpeg') no-repeat ;
           
            width: 100%;
            height: 50px;
        }
        .header-row th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <table style="width: 600px; border: none; padding: 0;">

        <tr class="header-row">
            <th colspan="18">Acma Buyers Guide</th>
        </tr>
        @php
            $counter = 0;
        @endphp

        @foreach($companies as $company)

            @if($counter % 2 == 0) 
                <tr>
                    <td style="width: 300px;">
                        <table>
                            <tr>
                                <td colspan="2">{{ $company->name }}</td>
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
                                        <td colspan="2">{{ $company->name }}</td>
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