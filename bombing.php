<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['phoneNumber'])) {
        $phoneNumber = $_POST['phoneNumber'];
        $apiUrl = "http://103.174.153.202/~rsbdxyz/Api/sms/main.php?num=" . urlencode($phoneNumber);

        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the transfer as a string
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Timeout after 10 seconds
        
        // Execute cURL request
        $response = curl_exec($ch);

        // Check if any error occurred
        if (curl_errno($ch)) {
            http_response_code(500);
            echo "Error: Unable to send message. " . curl_error($ch);
        } else {
            $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpStatus == 200) {
                // Successfully sent
                echo "Bombing Successful!";
            } else {
                // Non-200 response code
                http_response_code(500);
                echo "Error: Unable to send message. HTTP Status: $httpStatus";
            }
        }

        // Close cURL session
        curl_close($ch);
    } else {
        http_response_code(400);
        echo "Error: Phone number not provided.";
    }
} else {
    http_response_code(405);
    echo "Error: Invalid request method.";
}
?>
