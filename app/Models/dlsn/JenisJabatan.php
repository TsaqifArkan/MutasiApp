<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class JenisJabatan extends Model
{
    /** @use HasFactory<\Database\Factories\JenisJabatanFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'kategori'
    ];

    /**
     * Get the SK Record for Specified Jenis Jabatan.
     */
    public function jenJabSkRec(): HasManyThrough
    {
        return $this->hasManyThrough(
            SkRecord::class,    // The final model
            SkDetail::class,    // The intermediate model
            'jab_id',           // Foreign key JenisJabatan model on the SkDetail model
            'id',               // Foreign key JenisJabatan model on the SkRecord model (note that this is the PK of SkRecord)
            'id',               // Local key (PK) on the JenisJabatan model
            'sk_rec_id'         // Local key (FK) on the SkDetail model that references the SkRecord
        )->withTimestamps();
    }           //      DONE ON 00.13 18/06/2025 NEXT FIX SKRECORDS MODEL!!!
}
