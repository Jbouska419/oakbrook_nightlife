<?php # Script 9.3 - register.php
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Thank You';


session_start();
require_once("includes/PHPMailer/class.phpmailer.php");
require_once("includes/PHPMailer/class.smtp.php");
require_once("includes/PHPMailer/language/phpmailer.lang-es.php");

//$to_name = "Junk Mail";
$to = 'Jbouska419@gmail.com';
$subject = "Oakbrook Nightlife Newsletter";
//$message = "This is a test";
$message = '<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Oakbrook Nightlife Newsletter</title>
	<style type="text/css">
		
	</style>
</head>
<body bgcolor="#000000">
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000">
		<tr>
			<td>
		<table class="container" width="700px" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top" class="logo" bgcolor="#ffffff" style="padding: 10px 20px 0 20px; border-left: 1px solid #ffffff; 
				border-right: 1px solid #ffffff; border-top: 1px solid #ffffff;">
				<a href="www.oakbrooknightlife.com"><img src="http://www.oakbrooknightlife.com/images/logo_large.png" alt="logo" width="700px" height="146px" border="0"></a>
				</td>
			</tr>
			<tr>
				<td valign="top" class="headline" bgcolor="#ffffff" style="padding: 15px 20px 5px 30px; border-left: 1px solid #ffffff;
				border-right: 1px solid #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 22px;">
				<h1 style="margin: 0 0 15px 0; font-weight: normal; font-size: 32px; color: #87448b;">Thanks for subscribing to Oakbrook Nightlife</h1>
				</td>
			</tr>
			<tr>
				<td valign="top" class="content" bgcolor="#ffffff" style="padding: 30px 30px 10px 30px; border-right: 1px solid #ffffff;
				border-left: 1px solid #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22px; color: #000000;">
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque sollicitudin tortor, et bibendum
					 lorem mattis at. Curabitur sed diam varius, accumsan massa quis, dignissim nisi. Donec eleifend metus non 
					 turpis dapibus, eget tincidunt lectus tincidunt. Nunc varius elit in augue posuere, a rhoncus metus pellentesque.
					  Sed non diam a libero condimentum volutpat eget id est. Duis ornare ullamcorper metus, ut dignissim enim 
					  dignissim vel. Fusce pretium lacus at magna ornare pretium.<br>
					In vitae mauris et lectus imperdiet malesuada. Phasellus dictum elit quis elit luctus aliquet. 
					Pellentesque gravida, massa nec consectetur ornare, massa urna porta velit, et eleifend tellus elit quis quam. 
					Vestibulum nec porttitor massa. Aliquam accumsan, sapien non scelerisque pharetra, felis metus dignissim purus, 
					vitae accumsan dui libero dapibus metus. Duis ac justo imperdiet, rutrum quam a, ullamcorper metus. 
					Vivamus sed ipsum congue, condimentum tortor consequat, facilisis orci. In viverra nisl eu blandit semper. 
					Praesent tristique lectus nec magna pretium gravida. Quisque at faucibus sapien, ut vulputate neque. 
					Donec nec vehicula sem. In dui augue, pulvinar in congue cursus, eleifend fringilla urna. 
					Suspendisse a consectetur elit. 
				</td>
			</tr>
			<tr>
				<td valign="top" class="footer" bgcolor="#ffffff" style="text-align: center; padding: 10px 10px 30px 10px; font-family: Arial, Helvetica, sans-serif; font-size: 10px;
				color: #000000;">
				&copy; Oakbrook Nightlife. PLEASE DO NOT REPLY TO THIS MESSAGE:
				<br><br>
				Your <a href="#" style="color: #FF0000;">privacy</a> is very important to us.  If you have received this email in error, please
				contact oakbrooknightlife@gmail.com.  Please use this link to <a href="#" style="color: #FF0000;">unsubscribe</a>.
				<br><br> 
				</td>
			</tr>
		
		</table>
				
			</td>
		</tr>
	</table>

</body>
</html>'
;
$from_name = "Oakbrook Nightlife";
$from = "admin@oakbrooknightlife.com";

// PHP SMTP version
$mail = new PHPMailer();

//$mail->IsSMTP();
//$mail->Host = "67.159.46.18";
//$mail->Port = 25;
//$mail->SMTPAuth = false;
//$mail->Username = "root"
//$mail->Password = "thinkwsop!";

$mail->FromName = $from_name;
$mail->From = $from;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->IsHTML(true);
$mail->Body = $message;
$mail->AddEmbeddedImage("images/logo_large.png","logo","logo_large.png");


$result = $mail->Send();
echo $result ? 'Sent' : 'Error';


 // Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require ('oakbrook_mysqli_connect.php'); // Connect to the database.
	
	$errors = array(); // Initialize an error array.
	
	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string ($dbc, trim($_POST['email']));
	}	

	// Check for zip code:
	if (empty($_POST['zip'])) {
		$errors[] = 'You forgot to enter your zip code.';
	} else {
		$z = mysqli_real_escape_string ($dbc, trim($_POST['zip']));
	}	
	
	if (empty($errors)) { // if everything is okay.
	
	// Register the user in the database...
	
	
	// Make the query:
	$q = "INSERT INTO users (email, zip, registration_date) VALUES ('$e', '$z', NOW() )";
	$r = mysqli_query ($dbc, $q); // Run the query.
	if ($r) { // If it ran okay.
	
	// Print a message:
	echo '<h1>Thank You!</h1>
	<p>You are now registered.  In Chapter 12 you will actually be able to log in!</p><p><br /></p>';
	
	} else { // If it did not run okay. 

	// Public message:
	echo '<h1>System Error</h1>
	<p class = "error">You could not be registered due to a system error.  We apologize for any inconvenience.</p>';
	
	// Debugging message:
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
	
	} // End of ($r) IF.

	mysqli_close($dbc); // Close the database connection.
	
	// Include the footer and quit the script:
	include ('includes/footer.html');
	exit();
	
	} else { // Report the errors.
	
	echo '<h1>Error!</h1>
	<p class = "error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p><p><br /></p>';
	
	} // End of if(empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.
	
} // End of the main Submit conditional.

?>
