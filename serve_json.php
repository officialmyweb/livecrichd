<?php
// Define allowed IP address
$allowed_ip = '106.194.3.152';

// Check the client's IP address
if ($_SERVER['REMOTE_ADDR'] !== $allowed_ip) {
    header('HTTP/1.0 403 Forbidden');
    echo 'You are not allowed to access this file.';
    exit;
}

// Read and serve the JSON file
$json_file = 'streams.json';

if (file_exists($json_file)) {
    header('Content-Type: application/json');
    readfile($json_file);
} else {
    header('HTTP/1.0 404 Not Found');
    echo 'File not found.';
}
?>
