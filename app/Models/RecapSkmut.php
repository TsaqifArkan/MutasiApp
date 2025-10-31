<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RecapSkmut extends Model
{
    /** @use HasFactory<\Database\Factories\RecapSkmutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'no_sk',
        'full_no_sk',
        'tgl_sk',
        'ttg_sk',
        'file_sk',
        'jml_peg',
    ];

    /**
     * 1 SK can consist of more than one Jenis SK.
     */
    public function recSkJenMut(): BelongsToMany
    {
        return $this->belongsToMany(JenMut::class, 'jen_sk_muts', 'sk_id', 'jen_id');
    }

    /**
     * Show that 1 SK can have Multiple History Entries.
     */
    public function recSkHist(): HasMany
    {
        return $this->hasMany(HistMut::class, 'sk_id', 'id');
    }
}
