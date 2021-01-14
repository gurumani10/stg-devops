<?php
include_once('_settings.php');
define("WEBMASTER_EMAIL", $site['form']['honeypot']['email']);
// error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post){
	$post_url = $GLOBALS['site']['form']['submit'];
	$comments = $_POST['hcomments'];

	// Email parameters
	$subject = $site['form']['honeypot']['subject'];
	$message = "This inquiry was identified as spam from\r\n\n URL \r\n\n The post data was ---\r\n\n" . file_get_contents("php://input");
	$from = 'Spam-Report';

	if($comments != ''){ // Run additional validation - comments is to check for spam
		// Send email with post string
		if($site['form']['honeypot']['enabled']){
			$mail = mail(WEBMASTER_EMAIL, $subject, $message, "From: ".$from."\r\n"."Reply-To: ".$from."\r\n"."X-Mailer: PHP/".phpversion());
		}
		$msg['error'] = 'honeypot';
	}else{  // Post data
		$response = postData($post_url);
		$xml = simplexml_load_string($response);
		$msg['EILMLeadID'] = (string)$xml->response['leadid'];
		$msg['EILMLeadProcessingState'] = (string)$xml->response['state'];
		$msg['EILMLeadProcessingStatus'] = (string)$xml->response['state'];
	}

}else{
	$msg['error'] = 'emptyform';
}

header('Location: ../../thankyou.php?'.http_build_query($msg));

// This function takes in a destination URL and submits our $_POST data to it.
function postData($url){
	$postdata = file_get_contents("php://input");

	$Curl_Session = curl_init($url);
	curl_setopt ($Curl_Session, CURLOPT_POST, 1);
	curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt ($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($Curl_Session);
	curl_close ($Curl_Session);
	return $response;
}
?>