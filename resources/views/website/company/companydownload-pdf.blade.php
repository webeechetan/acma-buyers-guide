<!-- resources/views/company_PDF.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Company Export</title>
     
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default body margin */
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
                        <p><strong>Email:</strong> {{ $company->email }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Website:</strong> {{ $company->website }}</p>
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
                        <p><strong>Address3:</strong> {{ $company->contact_details->address3 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Phone:</strong> {{ $company->contact_details->phone }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Fax:</strong> {{ $company->contact_details->fax }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Mainaddress1:</strong> {{ $company->contact_details->mainaddress1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Mainaddress2:</strong> {{ $company->contact_details->mainaddress2 }}</p>
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
            <table> 
    </div>

  
</body>
</html>
