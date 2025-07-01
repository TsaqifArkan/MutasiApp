<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    /** @use HasFactory<\Database\Factories\JabatanFactory> */
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
     * Get the SkRecord for the Jabatan.
     */
    public function jabSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'jab_id',           // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the Jabatan model
        );
    }
}
