<?php
    // Specify API URL
    define('HASOFFERS_API_URL', 'https://api.hasoffers.com/Apiv3/json');
    // Specify method arguments
    $args = array(
        'NetworkId' => 'vcm',
        'Target' => 'Affiliate_Report',
        'Method' => 'getConversions',
        'api_key' => 'ee1f5a519d1ba36fcb424d0cb2109593cdafdaac8b9fbe958bc58fbf7e126658',
        'fields' => array(
            'Stat.datetime',
            'Offer.name',
            'Stat.conversion_status',
            'Stat.approved_payout',
            'Stat.session_ip',
            'Stat.ad_id',
            'Stat.affiliate_info1',
            'Stat.offer_id',
            'Stat.sale_amount'
        ),
        'limit' => '10',
        'data_start' => '2016-02-24'
    );
    // Initialize cURL
    $curlHandle = curl_init();
    // Configure cURL request
    curl_setopt($curlHandle, CURLOPT_URL, HASOFFERS_API_URL . '?' . http_build_query($args));
    // Make sure we can access the response when we execute the call
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    // Execute the API call
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
    $jsonEncodedApiResponse = curl_exec($curlHandle);
    // Ensure HTTP call was successful
    if($jsonEncodedApiResponse === false) {
        throw new \RuntimeException(
            'API call failed with cURL error: ' . curl_error($curlHandle)
        );
    }
    // Clean up the resource now that we're done with cURL
    curl_close($curlHandle);
    // Decode the response from a JSON string to a PHP associative array
    $apiResponse = json_decode($jsonEncodedApiResponse, true);
    // Make sure we got back a well-formed JSON string and that there were no
    // errors when decoding it
    $jsonErrorCode = json_last_error();
    if($jsonErrorCode !== JSON_ERROR_NONE) {
        throw new \RuntimeException(
            'API response not well-formed (json error code: ' . $jsonErrorCode . ')'
        );
    }
    // Print out the response details
    if($apiResponse['response']['status'] === 1) {
        // No errors encountered
        echo 'API call successful';
        echo PHP_EOL;
        echo 'Response Data: ' . print_r($apiResponse['response']['data'], true);
        echo PHP_EOL;
    }
    else {
        // An error occurred
        echo 'API call failed (' . $apiResponse['response']['errorMessage'] . ')';
        echo PHP_EOL;
        echo 'Errors: ' . print_r($apiResponse['response']['errors'], true);
        echo PHP_EOL;
    }