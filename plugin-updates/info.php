<?php
header('Content-Type: application/json');

$plugin_info = [
    'custom-settings-plugin' => [
        'name' => 'Custom Settings Plugin',
        'version' => '0.0.4',
        'author' => 'Your Name',
        'homepage' => 'https://freewebstyles.com/',
        'requires' => '5.0',
        'tested' => '6.4',
        'downloaded' => 100,
        'last_updated' => date('Y-m-d'),
        'description' => 'WordPress管理画面にカスタム設定を追加するプラグイン',
        'changelog' => '<h4>1.0.1</h4><ul><li>アップデート機能追加</li></ul>'
    ]
];

$slug = $_GET['slug'] ?? '';

if (isset($plugin_info[$slug])) {
    echo json_encode($plugin_info[$slug]);
} else {
    echo json_encode(['error' => 'Plugin not found']);
}
?>