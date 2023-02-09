<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Modules\Core\HTTPResponsesCodes;
use App\Modules\Sanctum\SanctumService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SanctumController
{
    private SanctumService $service;
    
    public function __construct(SanctumService $service)
    {
        $this->service = $service;
    }

    public function issueToken(Request $request) : Response
    {
       try {
        $dataArray = ($request->toArray() !== []) ? $request->toArray() : $request->json()->all();
        return new Response(
            $this->service->issueToken($dataArray),
            HTTPResponsesCodes::success['code'],
        );
       } catch (Exception $error) {
        return new Response([
            'exception' => get_class($error),
            'errors' => $error->getMessage()
        ],HTTPResponsesCodes::BadRequest['code']);
       }
    }
}
