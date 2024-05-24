<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bank = new Bank();
        $bank->name = "BCP";
        $bank->account_number = "123-456-789";
        $bank->cci = "123456789";
        $bank->user_id = 1;
        $bank->status = 1;
        $bank->save();

        $bank = new Bank();
        $bank->name = "BBVA";
        $bank->account_number = "987-654-321";
        $bank->cci = "1987654321";
        $bank->user_id = 1;
        $bank->status = 1;
        $bank->save();

        $bank = new Bank();
        $bank->name = "BN";
        $bank->account_number = "123-987-654-321";
        $bank->cci = "112987654321";
        $bank->user_id = 1;
        $bank->status = 1;
        $bank->save();
    }
}
