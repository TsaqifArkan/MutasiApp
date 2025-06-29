<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkType extends Model
{
    /** @use HasFactory<\Database\Factories\SkTypeFactory> */
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
     * Get the SkRecord for the SkType.
     */
    public function skTypSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'sk_typ_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the SkType model
        )->withTimestamps();
    }
}
