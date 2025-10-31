<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nip_int',
        'nip_ext',
        'nip_ext_spc',
        'nama',
        'nama_gelar',
        'jen_kel',
        'jabatan',
        'peran',
    ];

    /**
     * Show that 1 Employee can have Multiple History Entries.
     */
    public function empHist(): HasMany
    {
        return $this->hasMany(HistMut::class, 'emp_id', 'id');
    }

    /**
     * Get the Golongan/Pangkat that owns by Employee.
     */
    public function empGpkt(): BelongsTo
    {
        return $this->belongsTo(GolPkt::class, 'gpk_id', 'id');
    }
}
