
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Emailer</title>
  <style>
    @media only screen and (max-width: 480px) {
      html {
        overflow-x: hidden;
      }

      h1,
      h2,
      h3,
      h4 {
        font-size: 14px !important;
        font-family: "poppins", sans-serif;
      }
    }
  </style>
</head>

<body style="max-width: 600px; margin: 0 auto; font-family: 'Roboto', sans-serif">
  <table cellspacing="0" cellpadding="0">
    <tr>
      <td>
        <table width="100%" cellspacing="0" cellpadding="0" style="background-color: #07395C; padding: 5px 20px">
          <tr>
            <td style="width: 275px;"><img src="https://www.acma.in/images/logo.png"style="width: 180px;"></td>
            <td><h3 style="color:#fff;">Acma Buyers Guide</h3></td>
          </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="0" style="padding: 5px 20px">
         
          <tr>
            <td><p style="margin-bottom: 0;"><b>Hello Admin , <b><br> </p></td>
          </tr>

          <tr>
            <td><p style="margin-bottom: 0;">We recieved a request from {{ $company->name }}  to approve the profile changes.</p></td>
          </tr>

          @php 


          foreach ($data as $key => $value) {
            if(!$value['old']){
                $value['old'] = 'N/A';
            }
           
            $updating_data .= ucfirst(str_replace('_', ' ', $key)) . ' From ' . implode(', ', (array)$value['old']) . ' to ' . implode(', ', (array)$value['new']) . '<br>';

        }

//         foreach ($data as $key => $value) {
//     if (!$value['old']) {
//         $value['old'] = 'NULL';
//     }

    
//     // Assume 'old' and 'new' represent image URLs or file paths
// $oldImageHtml = $value['old'] !== 'NULL' ? '<img src="' . asset('storage/' . $value['old']) . '" alt="Old Image">' : 'Null';
// $newImageHtml = $value['new'] !== 'NULL' ? '<img src="' . asset('storage/' . $value['new']) . '" alt="New Image">' : 'Null';


//     $updating_data .= $key . ' From ' . $oldImageHtml . ' to ' . $newImageHtml . '<br>';
// }

        @endphp
          <tr>
            <td><p style="margin-bottom: 0;">Updating Data : ' . {!! $updating_data !!} </b></p></td>
          </tr>
          <tr>
            <td>
                <p style="margin-bottom: 0;">Regards,</p>
            </td>
        </tr>
    
        <!-- Add Acma Buyers Guide Section -->
        <tr>
            <td>
                <h3 style="color:#07395C; margin: 10px 0;">Acma Buyers Guide</h3>
            </td>
        </tr>
        </table>        
        <table width="100%" cellspacing="0" cellpadding="0" style="padding: 5px 20px; background-color: #07395C;">
        <tr>
            <td><p style="text-align: center; color: #fff;">Thank you </p></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>