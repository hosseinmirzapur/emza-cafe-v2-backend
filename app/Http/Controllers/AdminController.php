<?php

namespace App\Http\Controllers;


use App\Exceptions\CustomException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Services\ACL\LoginService;
use Illuminate\Http\JsonResponse;

class AdminController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return JsonResponse
     * @throws CustomException
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $service = new LoginService();
        $response = $service->login($request);
        return successResponse($response);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {

    }
}
