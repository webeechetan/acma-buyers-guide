<!-- resources/views/company_PDF.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Company Export</title>
     
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default body margin */
            font-family: 'Times New Roman', Times, serif;
        }
    
        .watermark-container {
            position: relative;
        }
    
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            opacity: 0.2;
            font-size: 100px; /* Adjust the font size as needed */
            transform: translate(-50%, -50%) rotate(-45deg); /
        }
    
        .company-container {
            max-width: 800px;
            margin: 0 auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
            position: relative;
        }
    
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            box-sizing: border-box;
        }
    
        .watermark-column {
            position: relative;
            z-index: 1;
        }
    
        .clear {
            clear: both;
        }

        .main-row{
    display:flex;
    justify-content:space-between;
}
    </style>
    
</head>
<body>

    <div style="text-align: center; margin-bottom: 5px; background-color: #0d2587;">
        <img src="https://www.acma.in/images/logo.png" alt="Header Image" style="max-width: 20%;">
    </div>
    

    <div class="watermark-container">
        <!-- Watermark -->
        <div class="watermark">
            <h1>ACMA</h1>
        </div>
        
            <table style="width: 600px">
                
                <tr>
                    <td style="width: 300px">
                        <p><strong>Name:</strong> {{ $company->name }}</p>
                    </td>
                    
                    <td style="width: 300px">
                        <p><strong>Company address:</strong> {{ $company->contact_details->email }}</p>
                    </td>   
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Pin:</strong> {{ $company->contact_details->pin }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>City:</strong> {{ $company->contact_details->city }}</p>
                    </td>  
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>State:</strong> {{ $company->contact_details->state }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Address2:</strong> {{ $company->contact_details->address2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Website:</strong> {{ $company->website }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Email:</strong> {{ $company->email }}</p>
                    </td>
                    
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Fax:</strong> {{ $company->contact_details->fax }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Main City:</strong> {{ $company->contact_details->maincity }}</p>
                    </td>
                    
                </tr>
                
                <tr>
                    <td style="width: 300px">
                        <p><strong>Plant Pin:</strong> {{ $company->contact_details->plant_pin }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Main State:</strong> {{ $company->contact_details->mainstate }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Plant Phone:</strong> {{ $company->contact_details->plant_phone }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Plant Fax:</strong> {{ $company->contact_details->plant_fax }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Plant Email:</strong> {{ $company->contact_details->plant_email }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Overseas Plant1:</strong> {{ $company->contact_details->overseas_plant_1 }}</p>
                    </td>
                </tr>
              
               
                <tr>
                    <td style="width: 300px">
                        <p><strong>Other Plant Address3:</strong> {{ $company->contact_details->otherplant_address3 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Year of Commencing:</strong> {{ $company->contact_details->year_commencing }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Managing Director:</strong> {{ $company->key_personnels->managing_director }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Chief Executive:</strong> {{ $company->key_personnels->chief_executive }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Sales Incharge:</strong> {{ $company->key_personnels->sales_in_charge }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Export Incharge:</strong> {{ $company->key_personnels->export_in_charge }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Production Incharge:</strong> {{ $company->key_personnels->production_in_charge }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Quality Incharge:</strong> {{ $company->key_personnels->quality_in_charge }}</p>
                    </td>
                </tr>
               
                <tr>
                    <td style="width: 300px">
                        <p><strong>Update Year:</strong> {{ $company->key_personnels->update_date }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Region:</strong> {{ $company->key_personnels->region }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Product Manufactured:</strong> {{ $company->product_details->products_manufactured }} ,{{ $company->product_details->product2 }},{{ $company->product_details->product3 }},{{ $company->product_details->product4 }}</p>
                    </td>
                    
                    <td style="width: 300px">
                        <p><strong>Phone:</strong> {{ $company->contact_details->phone }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Export Turnover(In Lakhs):</strong> {{ $company->product_details->export_turn_02_03 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Number of Employees:</strong> {{ $company->product_details->number_of_employees }}</p>
                    </td>
                </tr>
            <table> 
    </div>
  
</body>
</html>