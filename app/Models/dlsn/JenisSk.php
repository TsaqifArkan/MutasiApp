<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JenisSk extends Model
{
    /** @use HasFactory<\Database\Factories\JenisSkFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'jenis'
    ];

    /**
     * The SK's Record that belong to the Jenis SK.
     */
    public function jenSkRec(): BelongsToMany
    {
        return $this->belongsToMany(SkRecord::class, 'jen_sk_recs', 'j_jen_sk_id', 'j_sk_rec_id')->withTimestamps();
    }
}
