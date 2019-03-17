<?php

namespace PHPitter;

use PHPitter\Controllers\FrontController;
use PHPitter\Models\Request;

$request = new Request();
$frontController = new FrontController($request);

ob_clean();

echo $frontController->match();