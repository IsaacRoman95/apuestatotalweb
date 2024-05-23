<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Recharge;
use App\Models\Recharge_modification_history;
use App\Models\User;

class RechargeModificationHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RechargeModificationHistory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'recharge_id' => Recharge::factory(),
            'previous_amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'updated_amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'status' => $this->faker->boolean(),
        ];
    }
}
