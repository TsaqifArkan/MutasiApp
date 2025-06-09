<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SKRecord extends Model
{
    /** @use HasFactory<\Database\Factories\SKRecordFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tgl_sk',
        'no_sk',
        'periode',
        'jenis_sk',
    ];

    /**
     * Get the detail jabatan for the SK record.
     */
    public function rinciJab(): BelongsToMany
    {
        return $this->belongsToMany(JenisJabatan::class, 's_k_detail_jabatans', 'sk_rec_id', 'jab_id')->withPivot('jumlah')->withTimestamps();
    }
}
