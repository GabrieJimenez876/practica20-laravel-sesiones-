<?php

if ($uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    $file = __DIR__.$uri;

    if ($uri !== '/' && file_exists($file)) {
        return false;
    }
}

require_once __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
