<?php

use App\Http\Controllers\SanctumController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::group(
    ["middleware" => ['auth:sanctum']],
    function () {
        Route::POST("/students", [StudentsController::class, "update"]);
        Route::GET("/students", [StudentsController::class, "get"]);
        Route::DELETE("/students", [StudentsController::class, "softDelete"]);
    }
);