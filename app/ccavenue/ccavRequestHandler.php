<?php
namespace App\Ccavenue;

use App\Ccavenue\Crypto;

class ccavRequestHandler{

	public function __construct()
	{

	}

	public function init($request){
		$_POST = $request;
	}

}

$crypto = new Crypto();
?>


<html>
<head>
<title> Custom Form Kit </title>
</head>
<body>
<center>

<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='6F36707D0668636B26E60F3992104416';//Shared by CCAVENUES
	$access_code='AVGZ05KK32AN32ZGNA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=$crypto->encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>


