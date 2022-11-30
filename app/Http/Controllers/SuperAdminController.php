<?php

namespace App\Http\Controllers;


use App\Exceptions\CustomException;
use App\Http\Requests\SuperAdminLoginRequest;
use App\Services\SuperAdmin\SuperAdminLoginService;
use Illuminate\Http\JsonResponse;

class SuperAdminController extends Controller
{
    /**
     * @param SuperAdminLoginRequest $request
     * @return JsonResponse
     * @throws CustomException
     */
    public function login(SuperAdminLoginRequest $request): JsonResponse
    {
        $service = new SuperAdminLoginService();
        $response = $service->login($request);
        return successResponse($response);
    }
}
