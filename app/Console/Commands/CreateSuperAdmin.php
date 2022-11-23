<?php

namespace App\Console\Commands;

use App\Classes\Admins\SuperAdmin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin by the type of super.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        SuperAdmin::query()->create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        return Command::SUCCESS;
    }
}
