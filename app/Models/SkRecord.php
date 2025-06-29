<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkRecord extends Model
{
    /** @use HasFactory<\Database\Factories\SkRecordFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tgl_sk',
        'no_sk',
        'jml_asn',
    ];

    /**
     * Get the SkType that owns the SkRecord.
     */
    public function SkRecSkTyp(): BelongsTo
    {
        return $this->belongsTo(
            SkType::class,      // The related model
            'sk_typ_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the SkType model
        )->withTimestamps();
    }

    /**
     * Get the OrgCateg that owns the SkRecord.
     */
    public function SkRecOrgCat(): BelongsTo
    {
        return $this->belongsTo(
            OrgCateg::class,    // The related model
            'og_cat_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the OrgCateg model
        );
    }

    /**
     * Get the ApsReason that owns the SkRecord.
     */
    public function SkRecApsRsn(): BelongsTo
    {
        return $this->belongsTo(
            ApsReason::class,   // The related model
            'ap_rsn_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the ApsReason model
        );
    }

    /**
     * Get the OrgSubcateg that owns the SkRecord.
     */
    public function SkRecOrgSct(): BelongsTo
    {
        return $this->belongsTo(
            OrgSubcateg::class, // The related model
            'og_sct_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the OrgSubcateg model
        );
    }

    /**
     * Get the Golongan that owns the SkRecord.
     */
    public function SkRecGol(): BelongsTo
    {
        return $this->belongsTo(
            Golongan::class,    // The related model
            'gol_id',           // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the Golongan model
        );
    }

    /**
     * Get the Jabatan that owns the SkRecord.
     */
    public function SkRecJab(): BelongsTo
    {
        return $this->belongsTo(
            Jabatan::class,     // The related model
            'jab_id',           // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the Jabatan model
        );
    }
}
