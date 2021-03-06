<!DOCTYPE html>
<html>

<?php
	include("functions/functions.php");
	echo file_get_contents("html/header.html");
	$query = mysqli_query($con, "SELECT * FROM users INNER JOIN phonenumbers INNER JOIN shippingaddresses WHERE userID=1");
	while($result = mysqli_fetch_array($query))
	{
	$fname = $result['fName'];
	$lname = $result['lName'];
	$nickname = $result['nickname'];
	$email = $result['email'];
	$areaCode = $result['areaCode'];
	$restOfNumber = $result['restOfNumber'];
	$homeStreet = $result['homeStreet'];
	$homeCity = $result['homeCity'];
	$homeState = $result['homeState'];
	$homeZip = $result['homeZip'];
	$shippingStreet = $result['shippingStreet'];
	$shippingCity = $result['shippingCity'];
	$shippingState = $result['shippingState'];
	$shippingZip = $result['shippingZip'];
	}
?>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/new_style.css" media="all" </link>
</head>
<body>

	<div class="content" >

		<div id="user_container">
			<table width="398" border="0" align="center" cellpadding="0">
			<tr>
				<td height="26" colspan="2"><b>Your Profile Information</b></td>
				<td><div align="right"><a href="index.php">logout</a></div></td>
			</tr>
			<tr>
				<td width="82" valign="top"><div align="left">First Name:</div></td>
				<td width="165" valign="top"><?php echo $fname ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Last Name:</div></td>
				<td valign="top"><?php echo $lname ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Nickname:</div></td>
				<td valign="top"><?php echo $nickname ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">My Home Address:</div></td>
				<td valign="top"><?php echo $homeStreet, ' ', $homeCity, ', ', $homeState, ', ', $homeZip ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">My Shipping Address:</div></td>
				<td valign="top"><?php echo $shippingStreet, ' ', $shippingCity, ', ', $shippingState, ', ', $shippingZip ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Email:</div></td>
				<td valign="top"><?php echo $email ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Phone Number:</div></td>
				<td valign="top"><?php echo $areaCode, ' ', $restOfNumber ?></td>
			</tr>
			</table>
			<p align="center"><a href="index.php"></a>
			</p>
		</div>

	</div>

</body>
</html>
