<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

$url = "https://e2.me/".htmlspecialchars($queries['epl'], ENT_QUOTES);

$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);

/* Check for 404 (file not found). */
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
    /* Handle 404 here. */
}

curl_close($handle);

/* Handle $response here. */

echo json_encode($httpCode);