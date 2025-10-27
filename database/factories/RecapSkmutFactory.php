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
        return [
            'no_sk' => $this->faker->numberBetween(10, 1000),
            'full_no_sk' => function () {
                $prefix = $this->faker->unique()->bothify('KP.##.##/KEP-###');
                $year = $this->faker->dateTimeBetween('-6 years', 'now', 'Asia/Jakarta')->format('Y');
                return "{$prefix}/{$year}";
            },
            'tgl_sk' => $this->faker->dateTimeBetween('-6 years', 'now', 'Asia/Jakarta')->format('Y-m-d'),
            'ttg_sk' => $this->faker->randomElement(['Pemindahan ORG', 'Pemindahan APS', 'Pemberhentian dari Jabatan Administrasi', 'Pengangkatan dan Pemindahan Koordinator']),
            'file_sk' => $this->faker->filePath('pdf'),
        ];
    }
}
