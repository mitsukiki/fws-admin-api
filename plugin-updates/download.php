<?php
$slug = $_GET['slug'] ?? '';
$version = $_GET['version'] ?? '';

$plugin_files = [
    'custom-fields-plugin' => [
        '0.0.6' => 'https://freewebstyles.com/api/plugin-updates/releases/v0.0.6/custom-fields-plugin.zip',
    ]
];

if (isset($plugin_files[$slug][$version])) {
    $file_url = $plugin_files[$slug][$version];
    $filename = $slug . '.zip';
    
    $file_content = file_get_contents($file_url);
    if ($file_content !== false) {
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . strlen($file_content));
        echo $file_content;
        exit;
    }
}

http_response_code(404);
echo 'File not found';
?>