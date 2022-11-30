<?php


namespace App\Services\SuperAdmin;


use App\Classes\Admins\SuperAdmin;
use App\Exceptions\CustomException;
use App\Http\Requests\SuperAdminLoginRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\ArrayShape;

class SuperAdminLoginService
{
    /**
     * @param SuperAdminLoginRequest $request
     * @return array
     * @throws CustomException
     */
    #[ArrayShape(['admin' => "\App\Classes\Admins\SuperAdmin|\Illuminate\Database\Eloquent\Model", 'token' => "mixed"])] public function login(SuperAdminLoginRequest $request): array
    {
        $data = $request->validated();
        $admin = $this->findSuperAdmin($data['email'], $data['password']);
        return [
            'admin' => $admin,
            'token' => $admin->newToken()
        ];
    }

    /**
     * @param $email
     * @param $password
     * @return Model|SuperAdmin
     * @throws CustomException
     */
    protected function findSuperAdmin($email, $password): Model|SuperAdmin
    {
        $admin = SuperAdmin::query()->where('email', $email)->firstOrFail();
        if (!Hash::check($password, $admin->getAttribute('password'))) {
            throw new CustomException('ادمینی با این اطلاعات یافت نشد.');
        }
        return $admin->load(['role', 'role.permissions']);
    }
}
