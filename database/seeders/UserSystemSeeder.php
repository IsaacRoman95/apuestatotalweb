<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Se crean el usuario Admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->email_verified_at = Carbon::now();
        $admin->password = "apuestatotal$2024";
        $admin->save();

        //Se crean el usuario Adviser
        $adviser = new User();
        $adviser->name = "Adviser";
        $adviser->email = "adviser@gmail.com";
        $adviser->email_verified_at = Carbon::now();
        $adviser->password = "apuestatotal$2024";
        $adviser->save();

        //Se asigna el rol correspondiente a cada usuario
        $admin->assignRole('admin');
        $adviser->assignRole('adviser');
    }
}
