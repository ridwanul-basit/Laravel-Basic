<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Autoload Composer dependencies
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

/** @var Kernel $kernel */
$kernel = $app->make(Kernel::class);

// Capture the incoming HTTP request
$request = Request::capture();

// Handle the request through Laravel kernel
$response = $kernel->handle($request);

// Send the response back to the client
$response->send();

// Terminate the application (for middleware, logging, etc.)
$kernel->terminate($request, $response);
