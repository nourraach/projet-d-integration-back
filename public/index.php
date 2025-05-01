<?php
if ($_SERVER['APP_ENV'] === 'dev') {
    $_SERVER['HTTPS'] = 'off'; // Force HTTP in development
}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
