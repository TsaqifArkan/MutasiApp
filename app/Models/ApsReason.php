<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApsReason extends Model
{
    /** @use HasFactory<\Database\Factories\ApsReasonFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama'
    ];

    /**
     * Get the SkRecord for the ApsReason.
     */
    public function apsRsnSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'ap_rsn_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the ApsReason model
        );
    }
}
