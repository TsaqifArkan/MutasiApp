<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenMut extends Model
{
    /** @use HasFactory<\Database\Factories\JenMutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'tag',
        'ket',
    ];

    /**
     * 1 Jenis SK can be in more than one SK.
     */
    public function jenMutRecSk(): BelongsToMany
    {
        return $this->belongsToMany(RecapSkmut::class, 'jen_sk_muts', 'jen_id', 'sk_id');
    }

    /**
     * Show that 1 Jenis SK can have Multiple History Entries.
     */
    public function jenMutHist(): HasMany
    {
        return $this->hasMany(HistMut::class, 'jen_id', 'id');
    }
}
