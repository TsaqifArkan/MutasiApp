<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrgCateg extends Model
{
    /** @use HasFactory<\Database\Factories\OrgCategFactory> */
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
     * Get the SkRecord for the OrgCateg.
     */
    public function orgCatSkRec(): HasMany
    {
        return $this->hasMany(
            SkRecord::class,    // The related model
            'og_cat_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the OrgCateg model
        );
    }

    /**
     * Get the OrgSubcateg for the OrgCateg.
     */
    public function orgCatOrgSct(): HasMany
    {
        return $this->hasMany(
            OrgSubcateg::class, // The related model
            'org_categ_id',     // Foreign key on the OrgSubcateg model
            'id'                // Local key (PK) on the OrgCateg model
        );
    }
}
