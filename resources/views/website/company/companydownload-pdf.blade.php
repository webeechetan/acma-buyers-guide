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
                        <p><strong>Overseas Plant2:</strong> {{ $company->contact_details->overseas_plant_2 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Overseas Plant3:</strong> {{ $company->contact_details->overseas_plant_3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Other Address:</strong> {{ $company->contact_details->otheraddress }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Other Address1:</strong> {{ $company->contact_details->otheraddress_1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Other Plant Address:</strong> {{ $company->contact_details->otherplant_address1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Other Plant Address2:</strong> {{ $company->contact_details->otherplant_address2 }}</p>
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
                        <p><strong>HRD Incharge:</strong> {{ $company->key_personnels->hrd_incharge }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>R&D Incharge:</strong> {{ $company->key_personnels->rnd_incharge }}</p>
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
                        <p><strong>Scale:</strong> {{ $company->product_details->scale }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>SSI Info:</strong> {{ $company->product_details->ssi_info }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Trademark:</strong> {{ $company->product_details->trademark }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Total Capital:</strong> {{ $company->product_details->total_capital }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Net Investment Plant:</strong> {{ $company->product_details->net_investment_plant }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Total Investment Plant:</strong> {{ $company->product_details->total_investment_plant }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Sales Turnover(In Lakhs):</strong> {{ $company->product_details->sales_turnover }}</p>
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
                <tr>
                    <td style="width: 300px">
                        <p><strong>Skilled:</strong> {{ $company->product_details->skilled }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Semi Skilled:</strong> {{ $company->product_details->semi_skilled }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Un-Skilled:</strong> {{ $company->product_details->un_skilled }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Contractual:</strong> {{ $company->product_details->contractual }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Management & Above:</strong> {{ $company->product_details->management_above }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Other Mark1:</strong> {{ $company->product_details->other_mark1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Other Mark2:</strong> {{ $company->product_details->other_mark2 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Domesticoe:</strong> {{ $company->product_details->domesticoe }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Domesticoe1:</strong> {{ $company->product_details->domesticoe1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Domesticoe2:</strong> {{ $company->product_details->domesticoe2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Domesticoe3:</strong> {{ $company->product_details->domesticoe3 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Domesticoe4:</strong> {{ $company->product_details->domesticoe4 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Domestic Tier Oe:</strong> {{ $company->product_details->domestic_tier_oe }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Domestic Tier Oe1:</strong> {{ $company->product_details->domestic_tier_oe1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Domestic Tier Oe2:</strong> {{ $company->product_details->domestic_tier_oe2 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Domestic Tier Oe3:</strong> {{ $company->product_details->domestic_tier_oe3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Cusint1:</strong> {{ $company->product_details->cusint1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Cusint2:</strong> {{ $company->product_details->cusint2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Cusint3:</strong> {{ $company->product_details->cusint3 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Cusint Tier1:</strong> {{ $company->product_details->cusint_tier1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Cusint Tier2:</strong> {{ $company->product_details->cusint_tier2 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Cusint Tier3:</strong> {{ $company->product_details->cusint_tier3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>After Mkt1:</strong> {{ $company->product_details->afmkt1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>After Mkt2:</strong> {{ $company->product_details->afmkt2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>After Mkt3:</strong> {{ $company->product_details->afmkt3 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Foreign Collaboration1:</strong> {{ $company->foreign_collaboration->f_collab1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Foreign Product1:</strong> {{ $company->foreign_collaboration->f_prod1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Nature1:</strong> {{ $company->foreign_collaboration->nature1 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 300px">
                        <p><strong>Percentage1:</strong> {{ $company->foreign_collaboration->per1 }}</p>
                    </td>
                    <td style="width: 300px">
                        <p><strong>Foreign Collaboration2:</strong> {{ $company->foreign_collaboration->f_collab2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product2:</strong>{{ $company->foreign_collaboration->f_prod2 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature2:</strong>{{ $company->foreign_collaboration->nature2 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage2:</strong>{{ $company->foreign_collaboration->per2 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration3:</strong>{{ $company->foreign_collaboration->f_collab3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product3:</strong>{{ $company->foreign_collaboration->f_prod3 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature3:</strong>{{ $company->foreign_collaboration->nature3 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage3:</strong>{{ $company->foreign_collaboration->per3 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration4:</strong>{{ $company->foreign_collaboration->f_collab4 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product4:</strong>{{ $company->foreign_collaboration->f_prod4 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature4:</strong>{{ $company->foreign_collaboration->nature4 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage4:</strong>{{ $company->foreign_collaboration->per4 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration5:</strong>{{ $company->foreign_collaboration->f_collab5 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product5:</strong>{{ $company->foreign_collaboration->f_prod5 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature5:</strong>{{ $company->foreign_collaboration->nature5 }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage5:</strong>{{ $company->foreign_collaboration->per5 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration6:</strong>{{ $company->foreign_collaboration->f_collab6 }}</p>
                    </td>
                </tr>


                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product6:</strong>{{ $company->foreign_collaboration->f_prod6 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature6:</strong>{{ $company->foreign_collaboration->nature6 }}</p>
                    </td>
                </tr>


                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage6:</strong>{{ $company->foreign_collaboration->per6 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration7:</strong>{{ $company->foreign_collaboration->f_collab7 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product7:</strong>{{ $company->foreign_collaboration->f_prod7 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature7:</strong>{{ $company->foreign_collaboration->nature7 }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage7:</strong>{{ $company->foreign_collaboration->per7 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration8:</strong>{{ $company->foreign_collaboration->f_collab8 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product8:</strong>{{ $company->foreign_collaboration->f_prod8 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature8:</strong>{{ $company->foreign_collaboration->nature8 }}</p>
                    </td>
                </tr>
                

                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage8:</strong>{{ $company->foreign_collaboration->per8 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration9:</strong>{{ $company->foreign_collaboration->f_collab9 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product9:</strong>{{ $company->foreign_collaboration->f_prod9 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature9:</strong>{{ $company->foreign_collaboration->nature9 }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage9:</strong>{{ $company->foreign_collaboration->per9 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Foreign Collaboration10:</strong>{{ $company->foreign_collaboration->f_collab10 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Foreign Product10:</strong>{{ $company->foreign_collaboration->f_prod10 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Nature10:</strong>{{ $company->foreign_collaboration->nature10 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Percentage10:</strong>{{ $company->foreign_collaboration->per10 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Member:</strong>{{ $company->foreign_collaboration->member }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>ISO:</strong>{{ $company->foreign_collaboration->iso }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>ISO Date:</strong>{{ $company->foreign_collaboration->isodate }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>ISO Agency:</strong>{{ $company->foreign_collaboration->isoagency }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Quality Standard:</strong>{{ $company->foreign_collaboration->qs }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>QS Date:</strong>{{ $company->foreign_collaboration->qsdate }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>QS Agency:</strong>{{ $company->foreign_collaboration->qsagency }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:300px">
                        <p><strong>ISO 14:</strong>{{ $company->foreign_collaboration->iso14 }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>ISO 14 Date:</strong>{{ $company->foreign_collaboration->iso14date }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>ISO14 Agency:</strong>{{ $company->foreign_collaboration->iso14agency }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>TS:</strong>{{ $company->foreign_collaboration->ts }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>TS Date:</strong>{{ $company->foreign_collaboration->tsdate }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>TS Agency:</strong>{{ $company->foreign_collaboration->tsagency }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Deming Award:</strong>{{ $company->foreign_collaboration->deming_award }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Japan Quality Medal:</strong>{{ $company->foreign_collaboration->japan_quality_medal }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:300px">
                        <p><strong>Emark:</strong>{{ $company->foreign_collaboration->emark }}</p>
                    </td>
                    <td style="width:300px">
                        <p><strong>Bismark:</strong>{{ $company->foreign_collaboration->bsimark }}</p>
                    </td>
                </tr>


              
            <table> 
    </div>

  
</body>
</html>