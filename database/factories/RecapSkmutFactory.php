<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecapSkmut>
 */
class RecapSkmutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gen_no_sk = generate_no_sk();
        return [
            'no_sk' => $gen_no_sk['no_sk'],
            'full_no_sk' => $gen_no_sk['full_no_sk'],
            'tgl_sk' => $gen_no_sk['tgl_sk'],
            'ttg_sk' => generate_ttg_sk(),
            'file_sk' => $this->faker->filePath(),
            'jml_peg' => $this->faker->numberBetween(1, 500),
        ];
    }
}
