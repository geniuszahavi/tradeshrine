

<?php
extract($_GET);

$url = 'https://api.fincra.com/core/bvn-verification';
$parameters = [
    'bvn' => "092929292",
    'business' => '990099099090'
];

$headers = [
    'Accepts: application/json',
    'Content-Type: application/json'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL

$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

// Check for cURL errors or HTTP status code
if ($httpCode >= 400) {
    // Handle errors, e.g., return an error response
    http_response_code($httpCode);
    echo json_encode(['error' => 'Failed to retrieve data']);
} else {
    // Decode the JSON response
    $responseData = json_decode($response);

    // Check if the decoding was successful
    if ($responseData === null) {
        // Handle JSON decoding error
        echo json_encode(['error' => 'Failed to decode JSON']);
    } else {
        // Encode only the 'data' property for the response
        echo json_encode(['status' => $responseData->status, 'data' => $responseData->data]);
    }
}

curl_close($curl); // Close request
?>
