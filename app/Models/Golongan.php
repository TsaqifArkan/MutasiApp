<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Golongan extends Model
{
    /** @use HasFactory<\Database\Factories\GolonganFactory> */
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
     * Get the SkRecord for the Golongan.
     */
    public function golSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'gol_id',           // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the Golongan model
        );
    }
}
