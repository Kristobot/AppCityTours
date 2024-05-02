<?php

namespace Database\Seeders;

use App\Enums\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Permission from Tourist Packages
        Permission::create(['name' => 'reservations.index'])->syncRoles([UserType::ADMIN,UserType::EMPLOYEE]);

    }
}
