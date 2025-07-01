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
        'sk_typ_id',
        'og_cat_id',
        'og_sct_id',
        'ap_rsn_id',
        'gol_id',
        'jab_id',
        'tgl_sk',
        'no_sk',
        'jml_asn',
    ];

    /**
     * Get the SkType that owns the SkRecord.
     */
    public function skRecSkTyp(): BelongsTo
    {
        return $this->belongsTo(
            SkType::class,      // The related model
            'sk_typ_id',        // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the SkType model
        );
    }

    /**
     * Get the OrgCateg that owns the SkRecord.
     */
    public function skRecOrgCat(): BelongsTo
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
    public function skRecApsRsn(): BelongsTo
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
    public function skRecOrgSct(): BelongsTo
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
    public function skRecGol(): BelongsTo
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
    public function skRecJab(): BelongsTo
    {
        return $this->belongsTo(
            Jabatan::class,     // The related model
            'jab_id',           // Foreign key on the SkRecord model
            'id'                // Local key (PK) on the Jabatan model
        );
    }

    public function getJenisSkAttribute(): string
    {
        // Cek apakah relasi sudah diload
        $skType = $this->skRecSkTyp?->nama;

        $suffix = ' ke Jabatan Fungsional / Jabatan Pelaksana';

        if ($skType === 'Organisasi') {
            $orgCateg = $this->skRecOrgCat?->nama;
            $orgSub   = $this->skRecOrgSct?->nama;
            $jabatan  = $this->skRecJab?->nama;
            if ($orgSub === 'Peralihan') {
                $jabatan = $jabatan . $suffix;
            }

            return collect([$skType, $orgCateg, $orgSub, $jabatan])
                ->filter() // hilangkan null
                ->implode(', ');
        }

        if ($skType === 'Atas Permintaan Sendiri (APS)') {
            $apsReason = $this->skRecApsRsn?->nama;
            $golongan  = $this->skRecGol?->nama;

            return collect([$skType, $apsReason, $golongan])
                ->filter()
                ->implode(', ');
        }

        return $skType ?? 'Tidak Diketahui';
    }
}
