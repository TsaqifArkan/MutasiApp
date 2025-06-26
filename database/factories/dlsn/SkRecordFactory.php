<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkRecord>
 */
class SkRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_sk' => fake()->date(),
            'no_sk' => fake()->bothify('KP.##.##/KEP-###/????'),
            'periode' => fake()->date('Y-m-01'),
        ];
    }
}
