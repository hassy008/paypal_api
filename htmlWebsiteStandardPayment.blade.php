<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Website Payment</title>
<link rel="stylesheet" href="css/style.css">
<script language="javascripts" type="text/javascript">
  function paypal_submit(){
   // var actionName='https://www.paypal.com/cgi-bin/webscr';
   var actionName='https://www.sandbox.paypal.com/cgi-bin/webscr';
 // 	var actionName='https://www.sandbox.paypal.com/cgi-bin/webscr';

  	document.forms.frmOrderAutoSubmit.action=actionName;
  	document.forms.frmOrderAutoSubmit.submit();
  }	
</script>
</head>
<!--onload Paypal_submit()-->
<body onload="paypal_submit();">
<form style="padding: 0px; margin:0px;" name="frmOrderAutoSubmit" method="post">
  <input type="hidden" name="return" value="<?//=base_url()?>paymentMethods/payment_utility/paymentSuccess/<?//=$order_row_id?>.html">
  <input type="hidden" name="cancel_return" value="<?//=base_url()?>paymentMethods/payment_utility/cancelExpressCheckoutSale/<?//=$order_row_id?>.html">	
  
  <input type="hidden" name="upload" value="1">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="hasnathrumman12345@gmail.com"> 

  <input type="hidden" name="quantity" value="4">
  <input type="hidden" name="item_name" value="Desktop">
  <input type="hidden" name="amount" value="1500">  

  <input type="hidden" name="rm" value="2">
  <input type="hidden" name="address_override" value="0">
  <input type="hidden" name="first_name" value="<?//=$customer_info->shipping_name?>"> 
  <input type="hidden" name="last_name" value="">

  <input type="hidden" name="address1" value="">
  <input type="hidden" name="address2" value="">
  <input type="hidden" name="city" value="">
  <input type="hidden" name="state" value="">
  <input type="hidden" name="zip" value=""> 	

  <input type="hidden" name="night_phone_a" value="">
  <input type="hidden" name="night_phone_b" value="">
  <input type="hidden" name="night_phone_c" value=""> 	


</form>

</body>
</html>