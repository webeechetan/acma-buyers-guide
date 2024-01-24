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
               
                    <p><strong>Name:</strong> {{ $company->name }}</p>
                    
                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="column watermark-column">
            <div class="company-info">
              
                

                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="clear"></div>

        <div class="column watermark-column">
            <div class="company-info">
              
                <!-- Add other properties as needed -->
            </div>
        </div>

        <div class="column watermark-column">
            <div class="company-info">

                
            
                <!-- Add other properties as needed -->
            </div>
        </div>
       
    </div>

</div>

</div>

  
</body>
</html>
