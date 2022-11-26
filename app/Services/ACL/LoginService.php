<?php


namespace App\Services\ACL;


use App\Classes\Admins\NormalAdmin;
use App\Exceptions\CustomException;
use App\Http\Requests\LoginRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\ArrayShape;

class LoginService
{
    /**
     * @param LoginRequest $request
     * @return array
     * @throws CustomException
     */
    #[ArrayShape(['token' => "mixed", 'admin' => "\App\Classes\Admins\NormalAdmin|\Illuminate\Database\Eloquent\Model"])] public function login(LoginRequest $request): array
    {
        $data = filterData($request->validated());
        $admin = $this->findAdmin($data['email'], $data['password']);
        $token = $admin->newToken()->plainTextToken;
        return [
            'token' => $token,
            'admin' => $admin
        ];
    }

    /**
     * @param $email
     * @param $password
     * @return NormalAdmin|Model
     * @throws CustomException
     */
    protected function findAdmin($email, $password): NormalAdmin|Model
    {
        $admin = NormalAdmin::query()->where('email', $email)->firstOrFail();
        if (!Hash::check($password, $admin->getAttribute('password'))) {
            throw new CustomException('کاربری با اطلاعات وارد شده یافت نشد');
        }
        return $admin;
    }
}
