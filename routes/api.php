<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Villa Owners
    Route::apiResource('villa-owners', 'VillaOwnersApiController');
});
