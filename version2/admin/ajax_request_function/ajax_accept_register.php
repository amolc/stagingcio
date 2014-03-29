
<?php
include('../../sql_config/database/cio_db.php'); 

$registration_id = mysql_real_escape_string($_POST['registration_id']);

// echo $tour_id;
	$sql = mysql_query("UPDATE registration SET registration_status = 'accepted' WHERE  registration_id = $registration_id");
$result = mysql_query("select registration_email from registration  WHERE  registration_id = $registration_id");
		while ($row = mysql_fetch_array($result)) 
		{ 
			$registration_email = $row['registration_email']
			
		}
	if($sql)
	{
									
											/*$mg_api = 'key-4vyeldmso9oe3t8gitphksdwz9p0tpw5';
											$mg_version = 'api.mailgun.net/v2/';
											$mg_domain = "staging.cio-choice.sg";
											$mg_from_email = "info@samples.com";
											$mg_message_url = "https://".$mg_version.$mg_domain."/messages";
											$ch = curl_init();
											curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
											curl_setopt ($ch, CURLOPT_MAXREDIRS, 3);
											curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, false);
											curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
											curl_setopt ($ch, CURLOPT_VERBOSE, 0);
											curl_setopt ($ch, CURLOPT_HEADER, 1);
											curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
											curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
											curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
											curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mg_api);
											curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
											curl_setopt($ch, CURLOPT_POST, true);
											//curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
											curl_setopt($ch, CURLOPT_HEADER, false);
											//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
											curl_setopt($ch, CURLOPT_URL, $mg_message_url);
											curl_setopt($ch, CURLOPT_POSTFIELDS,               
													array(  'from'      => '<' . $from . '>',
															'to'        => $registration_email,
															'subject'   => $subject.time(),
															'text'      => $message

														));
											$result = curl_exec($ch);
											curl_close($ch);
											$res = json_decode($result,TRUE);*/
											
								$to = $registration_email ;					
								$subject = "Registration";
								$message = '<!doctype html>
									<html>
									<head>
									<meta charset="utf-8">
									<title>Tour bookings</title>
									<style>
									body { margin:0px; padding:0px;}
									</style>
									</head>

									<body>
										<div>email message here when accepted</div>
									</body>
									</html>';								
									$headers  = 'MIME-Version: 1.0' . "\r\n";
									$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
									$headers .= 'To: '.$registration_email.'' . "\r\n";
									$headers .= 'From: apache@iamamol.com' . "\r\n";					
									mail( $to, $subject, $message, $headers );
		echo "accepted";
	}
	else {
		echo "error";
	}

?>