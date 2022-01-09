<?php

use App\Http\Controllers\Api\V1\Admin\CompanyApiController;
use App\Http\Controllers\Api\V1\Admin\GameApiController;
use App\Http\Controllers\Api\V1\Admin\PlatformApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Game
    Route::apiResource('games', GameApiController::class);

    // Platform
    Route::apiResource('platforms', PlatformApiController::class);

    // Company
    Route::apiResource('companies', CompanyApiController::class);
});
