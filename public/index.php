<?php

use App\Kernel;
$d = dirname(__DIR__);
require_once $d.'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
