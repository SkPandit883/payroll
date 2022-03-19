<?php

namespace Database\Factories;

use App\Models\CashBook;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CashBook>
 */
class CashBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>date('Y-m-d'),
            'bill_no'=>Str::random(12),
            'amount'=>rand(100,2000),
            'remarks'=>$this->faker->sentence()
        ];
    }
}
