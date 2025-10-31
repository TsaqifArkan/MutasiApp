<?php

namespace Database\Factories;

use App\Models\JenMut;
use App\Models\RecapSkmut;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JenSkMutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sk = RecapSkmut::inRandomOrder()->first();
        $jen = JenMut::inRandomOrder()->first();

        return [
            'sk_id' => $sk->id,
            'jen_id' => $jen->id,
        ];
    }
}
