<?php

namespace Database\Seeders;

use App\Models\JenisSk;
use App\Models\SkRecord;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenSkRecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skRecIds = SkRecord::pluck('id');
        $jenSkIds = JenisSk::pluck('id');

        foreach ($skRecIds as $skId) {
            // ambil 1–3 jenis acak untuk tiap SK
            $randomJenis = $jenSkIds->random(rand(1, 3));
            SkRecord::find($skId)->skRecJenSk()->attach($randomJenis);
        }
    }
}
