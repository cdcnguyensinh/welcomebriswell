<!DOCTYPE html>
<html>
<head>
	<title>GMO TEST</title>
</head>
<body>

<?php
	if (!empty($_POST)) {
		echo "<pre>";
		print_r($_POST);
	}
?>

<?php 
	//$orderId = uniqid();
	$orderId = 00000000000000000212;

	// if (mb_strlen($orderId) < 27) {
		// for ($i = mb_strlen($orderId); $i < 27; $i++) {
			// $orderId = '0'.$orderId;
		// }
	// }

	$shopId = "tshop00012060";
	$shopPass = "7esv6gb3";

	$datetime = date("Ymdhms");
	$ShopPassString = $shopId.'|'.$orderId.'|980|0|'.$shopPass.'|'.$datetime;
	// echo $ShopPassString;die;


	$sitePass = "q34xrgnp";
	$siteId = "tsite00023135";

	$memberId = "201604010000001";

	$sitePassString = $siteId.$memberId.$sitePass.$datetime;

	$sitePassString2 = $siteId.$memberId.$shopId.'0000000000000056ffdbf51bfcf'.$sitePass.$shopPass.$datetime;
?>

	<form action="https://pt01.mul-pay.jp/link/<?php echo $shopId?>/Multi/Entry" method="GET">
		<div>
			<label>1.ShopID</label>
			<input name="ShopID" value="<?php echo $shopId?>">
		</div>

		<div>
			<label>2.ORDERID</label>
			<input name="OrderID" value="<?php echo $orderId;?>">
		</div>

		<div>
			<label>3.Amount</label>
			<input name="Amount" value="980">
		</div>

		<div>
			<label>4.DateTime</label>
			<input name="DateTime" value="<?php echo $datetime;?>">
		</div>

		<div>
			<label>5.0.ShopPassString un cryption </label>
			<input name="ShopPassString" value="<?php echo $ShopPassString;?>">
		</div>

		<div>
			<label>5.ShopPassString</label>
			<input name="ShopPassString" value="<?php echo md5($ShopPassString);?>">
		</div>

		<div>
			<label>6.RetURL</label>
			<input name="RetURL" value="http://localhost/gmo_demo.php">
		</div>

		<div>
			<label>7.UseCredit</label>
			<input name="UseCredit" value="1">
		</div>

		<div>
			<label>8.Tax</label>
			<input name="Tax" value="0">
		</div>
		
		<div>
			<label>9.JobCd</label>
			<input name="JobCd" value="AUTH">
		</div>
		
		<div>
			<label>10.TemplateNo</label>
			<input name="TemplateNo" value="2">
		</div>
		
		<div>
			<label>11.CancelURL</label>
			<input name="CancelURL" value="http://localhost/gmo_demo.php">
		</div>
		<div>
			<label>12.SessionTimeout</label>
			<input name="SessionTimeout" value="600">
		</div>
				<div>
			<label>13.Lang</label>
			<input name="Lang" value="en">
		</div>
		<div>
			<button type="submit">Send</button>
		</div>
	</form>

</body>
</html>