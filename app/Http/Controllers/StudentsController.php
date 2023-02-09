<?php

namespace App\Http\Controllers;

use App\Modules\Core\HTTPResponsesCodes;
use App\Modules\Students\StudentsService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StudentsController
{
    private StudentsService $service;

    public function __construct(StudentsService $service)
    {
        $this->service = $service;
    }

    public function get(int $id): Response
    {
        try{
            return new response($this->service->get($id));
        }catch(Exception $error){
            return response()->json(
                [
                    'exception' => get_class($error),
                    'errors' => $error->getMessage()
                ],
                HTTPResponsesCodes::BadRequest["code"],
            );
        }
    }

    public function update(Request $request): Response
    {

    }

    public function softDelete(int $id): Response
    {

    }


}
