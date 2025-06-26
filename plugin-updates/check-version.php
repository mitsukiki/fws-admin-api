<?php
header('Content-Type: application/json');

$plugin_versions = [
    'custom-fields-plugin' => '0.0.4'
];

$slug = $_GET['slug'] ?? '';

if (isset($plugin_versions[$slug])) {
    echo json_encode(['version' => $plugin_versions[$slug]]);
} else {
    echo json_encode(['error' => 'Plugin not found']);
}
?>