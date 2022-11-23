<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [];
        $this->addToArray($permissions, [
            'persian_label' => '',
            'farsi_label' => ''
        ]);
        $permissions = collect($permissions);
        DB::transaction(function () use ($permissions) {
            $permissions->map(function ($permission) {
                Permission::query()->updateOrCreate(
                    ['persian_label' => $permission->persian_label, 'english_label' => $permission->english_label],
                    ['persian_label' => $permission->persian_label, 'english_label' => $permission->english_label]
                );
            });
        });
    }

    protected function addToArray(array &$array, array $item)
    {
        $array = array_push($array, $item);
    }
}
