<?php

namespace Database\Factories;

use App\Models\SkRecord;
use App\Models\JenisJabatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkDetail>
 */
class SkDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Unused anymore because manual injected in SkDetailSeeder
            // 'sk_rec_id' => SkRecord::inRandomOrder()->first()->id,
            // 'jab_id' => JenisJabatan::inRandomOrder()->first()->id,
            'jumlah' => $this->faker->numberBetween(1, 100),
        ];
    }
}
