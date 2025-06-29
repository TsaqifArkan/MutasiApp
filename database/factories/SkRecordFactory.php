<?php

namespace Database\Factories;

use App\Models\SkType;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\OrgCateg;
use App\Models\SkRecord;
use App\Models\ApsReason;
use App\Models\OrgSubcateg;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkRecord>
 */
class SkRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = SkRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get All Lookup once
        $skTypes = SkType::pluck('id')->toArray();
        $orgCategs = OrgCateg::pluck('id')->toArray();
        $apsReasons = ApsReason::pluck('id')->toArray();
        $golongans = Golongan::pluck('id')->toArray();
        $jabatans = Jabatan::pluck('id')->toArray();

        // Get Random sk_type
        $skTypeId = $this->faker->randomElement($skTypes);

        // Initiate all nullable fields
        $orgCategId = null;
        $orgSubcategId = null;
        $apsReasonId = null;
        $golonganId = null;
        $jabatanId = null;

        if ($skTypeId === SkType::where('nama', 'Organisasi')->value('id')) {
            // ORGANISASI : pilih orgCateg -> orgSubcateg -> jabatan
            $orgCategId = $this->faker->randomElement($orgCategs);
            // subtree based on orgCateg
            $subcategs = OrgSubcateg::where('org_categ_id', $orgCategId)->pluck('id')->toArray();
            $orgSubcategId = $this->faker->randomElement($subcategs);
            $jabatanId = $this->faker->randomElement($jabatans);
        } else {
            // APS : pilih apsReason -> golongan
            $apsReasonId = $this->faker->randomElement($apsReasons);
            $golonganId = $this->faker->randomElement($golongans);
        }

        return [
            'sk_typ_id' => $skTypeId,
            'og_cat_id' => $orgCategId,
            'ap_rsn_id' => $apsReasonId,
            'og_sct_id' => $orgSubcategId,
            'gol_id' => $golonganId,
            'jab_id' => $jabatanId,
            'tgl_sk' => $this->faker->dateTimeBetween('-6 years', 'now', 'Asia/Jakarta')->format('Y-m-d'),
            'no_sk' => function () {
                $prefix = $this->faker->unique()->bothify('KP.##.##/KEP-###');
                $year = $this->faker->dateTimeBetween('-6 years', 'now', 'Asia/Jakarta')->format('Y');
                return "{$prefix}/{$year}";
            },
            'jml_asn' => $this->faker->numberBetween(1, 100),
        ];
    }
}
