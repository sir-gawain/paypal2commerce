<?php
#die('This Skript is disabled in '.__FILE__.' line '.__LINE__.'. Disable this script after testing CURL');

// Testing CURL

// Checking if CURL is in the list of loaded Extensions
if (!in_array('curl', get_loaded_extensions())) {
	die('CURL is not in the list of loaded Extensions - Please enable CURL before using paypal2commerce. I cannot help you by that.');
}

$url = 'http://tlstest.paypal.com/';
$url = 'https://SHA2-test-api-3t.sandbox.paypal.com/';

$curl = curl_init();
if (false === $curl) {
	die('Well - curl_init() failed - you should ask your administrator about that.');
}
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_AUTOREFERER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);
curl_setopt($curl, CURLOPT_VERBOSE, true);
curl_setopt($curl, CURLOPT_CERTINFO, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_NOBODY, 1);
#curl_setopt($curl, CURLOPT_FAILONERROR, true);
#curl_setopt($curl, CURL_SSLVERSION_TLSv1_2, true);

/* Proxy configuration (userpasswd optional)
	curl_setopt( $curl, CURLOPT_PROXYPORT, 8080 );
	curl_setopt( $curl, CURLOPT_PROXY, 'http://127.0.0.1' );
	curl_setopt( curl_setopt ( $ch, CURLOPT_PROXYUSERPWD, 'user:passwd' );
 */

$html = curl_exec($curl); // execute the curl command
print_r(curl_getinfo($curl));
curl_close($curl); // close the connection

// assuming, that the content of typo3.org has more than 100bytes:)
//if (strlen($html) < 100) {
//	die('There was something wrong - '.$url.' could not be fetched?');
//}

#echo 'You should now see typo3.org - gratulations CURL works.<br>';
echo $html;
?>