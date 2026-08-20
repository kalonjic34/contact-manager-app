<?php

use App\Http\Controllers\API\ContactController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    '/contact'=> ContactController::class
]);