
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
            <td><a href="https://acma.in/"><img src="https://www.acma.in/images/logo.png"style="width: 180px;"></a></td>
            <td><h3 style="color:#fff; margin-bottom: 0; text-align: right;">Acma Buyers Guide</h3></td>
          </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="0" style="padding: 15px 20px">
         
          <tr>
            <td><p style="margin-bottom: 10px;"><strong style="color:#07395C;">Hello  {{ $company->name }} , </strong><br> </p></td>
          </tr>
          <tr>
            <td><p style="margin-bottom: 0;">We are sorry to inform you that your profile update request is rejected</p></td>
          </tr>

          <tr>
            <td><p style="margin-bottom: 0;">For more information please connect to the Deepak Jain at 
              <a href="mailto:Deepak.jain@acma.in">Deepak.jain@acma.in</a> </p></td>
          </tr>

          <tr>
            <td><p style="margin-bottom: 0;">Thanks for using our Application.</p></td>
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
            <td><p style="text-align: center; color: #fff; margin-bottom: 0;">Thank you </p></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>