<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JenSkMut extends Model
{
    // Turn off timestamps
    public $timestamps = false;

    /** @use HasFactory<\Database\Factories\JenMutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sk_id',
        'jen_id',
    ];

    /**
     * Get the Specified SK that owns by many jenis sk mutasi.
     */
    public function jenSkMutRecSk(): BelongsTo
    {
        return $this->belongsTo(RecapSkmut::class, 'sk_id', 'id');
    }

    /**
     * Get the Jenis Mutasi that owns by many sk mutasi.
     */
    public function jenSkMutJenMut(): BelongsTo
    {
        return $this->belongsTo(JenMut::class, 'jen_id', 'id');
    }
}
