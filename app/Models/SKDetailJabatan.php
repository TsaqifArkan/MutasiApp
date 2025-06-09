<?php

namespace App\Models;

use App\Models\SKRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SKDetailJabatan extends Model
{
    /** @use HasFactory<\Database\Factories\SKDetailJabatanFactory> */
    use HasFactory;

    protected $table = 's_k_detail_jabatans';

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
     * Get the SK record that owns the detail jabatan.
     */
    public function skDetJab(): BelongsTo
    {
        return $this->belongsTo(SKRecord::class, 'sk_rec_id');
    }

    /**
     * Get the SK record that owns the jenis jabatan.
     */
    public function skJenJab(): BelongsTo
    {
        return $this->belongsTo(JenisJabatan::class, 'jab_id');
    }
}