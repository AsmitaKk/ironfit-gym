<?php
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$uri = urldecode($uri);

if ($uri === '/' || $uri === '') {
    $index = __DIR__ . DIRECTORY_SEPARATOR . 'index.php';
    if (is_file($index)) {
        require $index;
        return true;
    }
}

if (strpos($uri, '/api/') === 0 || $uri === '/api') {
    require __DIR__ . DIRECTORY_SEPARATOR . 'api' . DIRECTORY_SEPARATOR . 'index.php';
    return true;
}

$path = __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, $uri);
if ($uri !== '/' && is_file($path)) {
    return false;
}

http_response_code(404);
header('Content-Type: text/plain; charset=utf-8');
echo 'Not Found';
return true;
