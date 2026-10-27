<?php
$indexHtml = __DIR__ . DIRECTORY_SEPARATOR . 'index.html';

if (is_file($indexHtml)) {
    header('Content-Type: text/html; charset=utf-8');
    readfile($indexHtml);
    exit;
}

http_response_code(500);
header('Content-Type: text/plain; charset=utf-8');
echo 'index.html is missing.';
