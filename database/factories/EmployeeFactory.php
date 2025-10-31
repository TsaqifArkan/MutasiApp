<?php

namespace Database\Factories;

use App\Models\GolPkt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $golpkt = GolPkt::inRandomOrder()->first();
        $nip = generate_nip();
        return [
            'nip_int' => fake()->unique()->numerify('#########'),
            'nip_ext' => $nip['nip'],
            'nip_ext_spc' => $nip['nip_spasi'],
            'nama' => fake()->name(),
            'nama_gelar' => fake()->name() . ', ' . fake()->randomElement(['S.Kom.', 'M.T.', 'Ph.D', 'S.Psi.']),
            'jen_kel' => $nip['gender'] == 1 ? 'L' : 'P',
            'jabatan' => fake()->jobTitle(),
            'peran' => fake()->randomElement(['PT', 'KT', 'AT', 'Non PFA']),
            'gpk_id' => $golpkt->id,
        ];
    }
}
