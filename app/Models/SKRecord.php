<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SkRecord extends Model
{
    /** @use HasFactory<\Database\Factories\SkRecordFactory> */
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
    ];

    /**
     * Get the Jenis Jabatan for the specified SK Record.
     */
    public function skRecJenJab(): BelongsToMany
    {
        return $this->belongsToMany(JenisJabatan::class, 'sk_details', 'sk_rec_id', 'jab_id')->using(SkDetail::class)->withPivot('jumlah')->withTimestamps();
    }

    /**
     * Get the Jenis SK for the specified SK Record.
     */
    public function skRecJenSk(): BelongsToMany
    {
        return $this->belongsToMany(JenisSk::class, 'jen_sk_recs', 'j_sk_rec_id', 'j_jen_sk_id')->withTimestamps();
    }
}
