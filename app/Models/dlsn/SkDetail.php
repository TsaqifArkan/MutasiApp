<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkDetail extends Model
{
    /** @use HasFactory<\Database\Factories\SkDetailFactory> */
    use HasFactory;

    // protected $table = 's_k_detail_jabatans';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sk_rec_id',
        'jab_id',
        'jumlah',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Get the SK Record from specified SK Details.
     */
    public function skDetSkRec(): BelongsTo
    {
        return $this->belongsTo(SkRecord::class, 'sk_rec_id');
    }

    /**
     * Get the Jenis Jabatan from specified SK Details.
     */
    public function skDetJenJab(): BelongsTo
    {
        return $this->belongsTo(JenisJabatan::class, 'jab_id');
    }
}
