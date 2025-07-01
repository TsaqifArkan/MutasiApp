<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrgSubcateg extends Model
{
    /** @use HasFactory<\Database\Factories\OrgSubcategFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'org_categ_id',
    ];

    /**
     * Get the SkRecord for the OrgSubcateg.
     */
    public function orgSctSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'og_sct_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the OrgSubcateg model
        );
    }

    /**
     * Get the OrgCateg that owns the OrgSubcateg.
     */
    public function orgSctOrgCat(): BelongsTo
    {
        return $this->belongsTo(
            OrgCateg::class,    // The related model
            'org_categ_id',     // Foreign key on the OrgSubcateg model
            'id'                // Local key (PK) on the OrgCateg model
        );
    }
}
