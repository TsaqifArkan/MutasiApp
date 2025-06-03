<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'kategori',
        'nama',
    ];

    /**
     * Get the SK Record for Specified Jenis Jabatan.
     */
    public function skRec(): BelongsToMany
    {
        return $this->belongsToMany(SKRecord::class, 's_k_detail_jabatans', 'jab_id', 'sk_rec_id')->using(SKDetailJabatan::class)->withPivot('jumlah')->withTimestamps();
    }
}
