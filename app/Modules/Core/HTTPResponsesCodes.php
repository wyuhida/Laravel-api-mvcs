<?php

declare(strict_types = 1);

namespace App\Modules\Core;

abstract class HTTPResponsesCodes
{
    const success = [
        'title' => 'success',
        'code' => 200,
        'message' => 'Request has been succfully processed.'
    ];

    const NotFound = [
        'title' => 'not_found_error',
        'code' => 404,
        'message' => 'Invalid arguments. Server failed to process your request',
    ];

    const InvalidArguments = [
        'title' => 'invalid_arguments_error',
        'code' => 404,
        'message' => 'could not locate resource',
    ];

    const BadRequest = [
        'title' => 'Invalid',
        'code' => 400,
        'message' => 'Server failed to process your request'
    ];
    
}
