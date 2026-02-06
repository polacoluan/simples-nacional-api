<?php

use App\Controllers\SimplesController;
use Core\Route;

(new Route())
    ->post('/simples-nacional', [SimplesController::class, 'index'])
    ->get('/annex', [SimplesController::class, 'annex'])

    ->run();
