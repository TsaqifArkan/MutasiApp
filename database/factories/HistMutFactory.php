<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\HistMut;
use App\Models\JenMut;
use App\Models\RecapSkmut;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistMut>
 */
class HistMutFactory extends Factory
{

    protected $model = HistMut::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sk = RecapSkmut::inRandomOrder()->first();
        $emp = Employee::inRandomOrder()->first();
        $before = Unit::inRandomOrder()->first();
        $after = Unit::where('id', '!=', $before->id)->inRandomOrder()->first();
        $jen  = JenMut::inRandomOrder()->first();
        return [
            'sk_id' => $sk->id,
            'emp_id' => $emp->id,
            'uker_bef_id' => $before->id,
            'uker_aft_id' => $after->id,
            'jen_id' => $jen->id,
        ];
    }
}
