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
    </style>
    
</head>
<body>

    <div class="watermark-container">
        <!-- Watermark -->
        <div class="watermark">
            <h1>ACMA</h1>
        </div>

    <div class="company-container">
        <h1>ACMA Buyers Guide</h1>

        <div class="column watermark-column">
            <div class="company-info">
               
                    <p><strong>Name:</strong> {{ $collection['name'] }}</p>
                    <p><strong>Email:</strong> {{ $collection['email'] }}</p>
                    <p><strong>Website:</strong> {{ $collection['website'] }}</p>
                    <p><strong>Address:</strong> {{ $collection['company_address'] }}</p>
                    <p><strong>Pin:</strong> {{ $collection['pin'] }}</p>
                    <p><strong>City:</strong> {{ $collection['city'] }}</p>
                    <p><strong>State:</strong> {{ $collection['state'] }}</p>
                    <p><strong>Address2:</strong> {{ $collection['address2'] }}</p>
                    <p><strong>Address3:</strong> {{ $collection['address3'] }}</p>
                    <p><strong>Phone:</strong> {{ $collection['phone'] }}</p>
                    <p><strong>Fax:</strong> {{ $collection['fax'] }}</p> 
                    <p><strong>Main Address:</strong> {{ $collection['mainaddress1'] }}</p>
                    <p><strong>Main Address2:</strong> {{ $collection['mainaddress2'] }}</p>
                    <p><strong>Main City:</strong> {{ $collection['maincity'] }}</p>
                    <p><strong>Plant Pin:</strong> {{ $collection['plant_pin'] }}</p>
                    <p><strong>Main State:</strong> {{ $collection['mainstate'] }}</p>
                    <p><strong>Plant Phone:</strong> {{ $collection['plant_phone'] }}</p>
                    <p><strong>Plant Fax:</strong> {{ $collection['plant_fax'] }}</p>
                    <p><strong>Plan Email:</strong> {{ $collection['plant_email'] }}</p>
                    <p><strong>Overseas Plant 1:</strong> {{ $collection['overseas_plant_1'] }}</p>
                    <p><strong>Overseas Plant 2:</strong> {{ $collection['overseas_plant_2'] }}</p>
                    <p><strong>Overseas Plant 3:</strong> {{ $collection['overseas_plant_3'] }}</p>
                    <p><strong>Other Address:</strong> {{ $collection['otheraddress'] }}</p>
                    <p><strong>Other Address 1:</strong> {{ $collection['otheraddress_1'] }}</p>
                    <p><strong>Other Plant Address1:</strong> {{ $collection['otherplant_address1'] }}</p>
                    <p><strong>Other Plant Address2:</strong> {{ $collection['otherplant_address2'] }}</p>
                    <p><strong>Other Plant Address3:</strong> {{ $collection['otherplant_address3'] }}</p>
                    <p><strong>year of Commencing:</strong> {{ $collection['year_commencing'] }}</p>
                    <p><strong>Region:</strong> {{ $collection['region'] }}</p>
                    <p><strong>Managing Director:</strong> {{ $collection['managing_director'] }}</p>
                  
                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="column watermark-column">
            <div class="company-info">
              
                <p><strong>Chief Executive:</strong> {{ $collection['chief_executive'] }}</p>
                <p><strong>Sales Incharge:</strong> {{ $collection['sales_in_charge'] }}</p>
                <p><strong>Export Incharge:</strong> {{ $collection['export_in_charge'] }}</p>
                <p><strong>Product Incharge:</strong> {{ $collection['production_in_charge'] }}</p>
                <p><strong>Quality Incharge:</strong> {{ $collection['quality_in_charge'] }}</p>
                <p><strong>HRD Incharge:</strong> {{ $collection['hrd_incharge'] }}</p>
                <p><strong>R&D Incharge:</strong> {{ $collection['rnd_incharge'] }}</p>
                <p><strong>Update Year:</strong> {{ $collection['update_date'] }}</p>
                <p><strong>Products Manufactured:</strong> {{ $collection['products_manufactured'] }}</p>
                <p><strong>Product 2:</strong> {{ $collection['product2'] }}</p>
                <p><strong>product 3:</strong> {{ $collection['product3'] }}</p>
                <p><strong>product 4:</strong> {{ $collection['product4'] }}</p>
                <p><strong>Scale:</strong> {{ $collection['scale'] }}</p>
                <p><strong>SSI Info:</strong> {{ $collection['ssi_info'] }}</p>
                <p><strong>Trademark:</strong> {{ $collection['trademark'] }}</p>

                <p><strong>Total Capital:</strong> {{ $collection['total_capital'] }}</p>
                <p><strong>Net Investment Plant:</strong> {{ $collection['net_investment_plant'] }}</p>
                <p><strong>Total Investment Plant:</strong> {{ $collection['total_investment_plant'] }}</p>

                <p><strong>Sales Turnover(In Lakh):</strong> {{ $collection['sales_turnover'] }}</p>
               
                <p><strong>Export Turnover: </strong> {{ $collection['export_turn_02_03'] }}</p>
                <p><strong>No of Employees:</strong> {{ $collection['number_of_employees'] }}</p>
                <p><strong>Skilled :</strong> {{ $collection['skilled'] }}</p>
                <p><strong>Semi Skilled:</strong> {{ $collection['semi_skilled'] }}</p>
                <p><strong>Un-Skilled:</strong> {{ $collection['un_skilled'] }}</p>
                <p><strong>Contractual:</strong> {{ $collection['contractual'] }}</p>
                <p><strong>Management & Above:</strong> {{ $collection['management_above'] }}</p>
                <p><strong>Other Mark1:</strong> {{ $collection['other_mark1'] }}</p>
                <p><strong>Other Mark2:</strong> {{ $collection['other_mark2'] }}</p>
                <p><strong>Domesticoe:</strong> {{ $collection['domesticoe'] }}</p>
                <p><strong>Domesticoe2:</strong> {{ $collection['domesticoe2'] }}</p>
                

                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="clear"></div>

        <div class="column watermark-column">
            <div class="company-info">
              
                <p><strong>Domesticoe3:</strong> {{ $collection['domesticoe3'] }}</p>
                <p><strong>Domesticoe4:</strong> {{ $collection['domesticoe4'] }}</p>
                <p><strong>Domestic Tier Oe:</strong> {{ $collection['domestic_tier_oe'] }}</p>
                <p><strong>Domestic Tier Oe1:</strong> {{ $collection['domestic_tier_oe1'] }}</p>
                <p><strong>Domestic Tier Oe2:</strong> {{ $collection['domestic_tier_oe2'] }}</p>
                <p><strong>Domestic Tier Oe3:</strong> {{ $collection['domestic_tier_oe3'] }}</p>
                <p><strong>Customer Intl:</strong> {{ $collection['custint1'] }}</p>
                <p><strong>Customer Intl2:</strong> {{ $collection['custint2'] }}</p>
                <p><strong>Customer Intl3:</strong> {{ $collection['custint3'] }}</p>
                <p><strong>Customer Tier1:</strong> {{ $collection['custint_tier1'] }}</p>
                <p><strong>Customer Tier2:</strong> {{ $collection['custint_tier2'] }}</p>
                <p><strong>Customer Tier3:</strong> {{ $collection['custint_tier3'] }}</p>
                <p><strong>After Mkt:</strong> {{ $collection['afmkt1'] }}</p>
                <p><strong>After Mkt2:</strong> {{ $collection['afmkt2'] }}</p>
                <p><strong>After Mkt3:</strong> {{ $collection['afmkt3'] }}</p>
                <p><strong>Foreign Collab1:</strong> {{ $collection['f_collab1'] }}</p>
                <p><strong>Foreign Prod1:</strong> {{ $collection['f_prod1'] }}</p>
                <p><strong>Nature:</strong> {{ $collection['nature1'] }}</p>
                <p><strong>Percentage %:</strong> {{ $collection['per1'] }}</p>

                <p><strong>Foreign Collab2:</strong> {{ $collection['f_collab2'] }}</p>
                <p><strong>Foreign Prod2:</strong> {{ $collection['f_prod2'] }}</p>
                <p><strong>Nature2:</strong> {{ $collection['nature2'] }}</p>
                <p><strong>Percentage2 %:</strong> {{ $collection['per2'] }}</p>

                <p><strong>Foreign Collab3:</strong> {{ $collection['f_collab3'] }}</p>
                <p><strong>Foreign Prod3:</strong> {{ $collection['f_prod3'] }}</p>
                <p><strong>Nature3:</strong> {{ $collection['nature3'] }}</p>
                <p><strong>Percentage3 %:</strong> {{ $collection['per3'] }}</p>

                <p><strong>Foreign Collab4:</strong> {{ $collection['f_collab4'] }}</p>
                <p><strong>Foreign Prod4:</strong> {{ $collection['f_prod4'] }}</p>
                <p><strong>Nature4:</strong> {{ $collection['nature4'] }}</p>
                <p><strong>Percentage4 %:</strong> {{ $collection['per4'] }}</p>
                <p><strong>Foreign Collab5:</strong> {{ $collection['f_collab5'] }}</p>
                <p><strong>Foreign Prod5:</strong> {{ $collection['f_prod5'] }}</p>
                <p><strong>Nature5:</strong> {{ $collection['nature5'] }}</p>
                <p><strong>Percentage5 %:</strong> {{ $collection['per5'] }}</p>

                <p><strong>Foreign Collab6:</strong> {{ $collection['f_collab6'] }}</p>
                <p><strong>Foreign Prod6:</strong> {{ $collection['f_prod6'] }}</p>
                <p><strong>Nature6:</strong> {{ $collection['nature6'] }}</p>
                <p><strong>Percentage6 %:</strong> {{ $collection['per6'] }}</p>
                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="column watermark-column">
            <div class="company-info">

                <p><strong>Foreign Collab7:</strong> {{ $collection['f_collab7'] }}</p>
                <p><strong>Foreign Prod7:</strong> {{ $collection['f_prod7'] }}</p>
                <p><strong>Nature7:</strong> {{ $collection['nature7'] }}</p>
                <p><strong>Percentage7 %:</strong> {{ $collection['per7'] }}</p>

                <p><strong>Foreign Collab8:</strong> {{ $collection['f_collab8'] }}</p>
                <p><strong>Foreign Prod8:</strong> {{ $collection['f_prod8'] }}</p>
                <p><strong>Nature8:</strong> {{ $collection['nature8'] }}</p>
                <p><strong>Percentage8 %:</strong> {{ $collection['per8'] }}</p>

                <p><strong>Foreign Collab9:</strong> {{ $collection['f_collab9'] }}</p>
                <p><strong>Foreign Prod9:</strong> {{ $collection['f_prod9'] }}</p>
                <p><strong>Nature9:</strong> {{ $collection['nature9'] }}</p>
                <p><strong>Percentage9 %:</strong> {{ $collection['per9'] }}</p>

                <p><strong>Foreign Collab10:</strong> {{ $collection['f_collab10'] }}</p>
                <p><strong>Foreign Prod10:</strong> {{ $collection['f_prod10'] }}</p>
                <p><strong>Nature10:</strong> {{ $collection['nature10'] }}</p>
                <p><strong>Percentage10 %:</strong> {{ $collection['per10'] }}</p>

                <p><strong>Member:</strong> {{ $collection['member'] }}</p>
                <p><strong>ISO:</strong> {{ $collection['iso'] }}</p>
                <p><strong>ISO Date:</strong> {{ $collection['isodate'] }}</p>
                <p><strong>ISO Agency:</strong> {{ $collection['isoagency'] }}</p>
                <p><strong>QS :</strong> {{ $collection['qs'] }}</p>
                <p><strong>QS Date:</strong> {{ $collection['qsdate'] }}</p>
                <p><strong>QS Agency:</strong> {{ $collection['qsagency'] }}</p>
                <p><strong>ISO14:</strong> {{ $collection['iso14'] }}</p>
                <p><strong>ISO14 Date:</strong> {{ $collection['iso14date'] }}</p>
                <p><strong>ISO14 Agency:</strong> {{ $collection['iso14agency'] }}</p>
                <p><strong>TS:</strong> {{ $collection['ts'] }}</p>
                <p><strong>TS Date:</strong> {{ $collection['tsdate'] }}</p>
                <p><strong>TS Agency:</strong> {{ $collection['tsagency'] }}</p>
                <p><strong>Deming Award:</strong> {{ $collection['deming_award'] }}</p>
                <p><strong>Japan Quality Medal:</strong> {{ $collection['japan_quality_medal'] }}</p>
                <p><strong>Emark :</strong> {{ $collection['emark'] }}</p>
                <p><strong>Bismark :</strong> {{ $collection['bismark'] }}</p>
               
               
            
                <!-- Add other properties as needed -->
            </div>
        </div>
       
    </div>

</div>

</div>

  
</body>
</html>
