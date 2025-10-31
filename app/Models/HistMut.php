<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistMut extends Model
{
    /** @use HasFactory<\Database\Factories\HistMutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sk_id',
        'emp_id',
        'uker_bef_id',
        'uker_aft_id',
        'jen_id',
    ];

    /**
     * Get the Specified SK that owns by many history.
     */
    public function histMutRecSk(): BelongsTo
    {
        return $this->belongsTo(RecapSkmut::class, 'sk_id', 'id');
    }

    /**
     * Get the Employee that owns by many history.
     */
    public function histMutEmp(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'emp_id', 'id');
    }

    /**
     * Get the Unit Kerja before mutation that owns by many history.
     */
    public function histMutUKBef(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'uker_bef_id', 'id');
    }

    /**
     * Get the Unit Kerja after mutation that owns by many history.
     */
    public function histMutUKAft(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'uker_aft_id', 'id');
    }

    /**
     * Get the Jenis Mutasi that owns by many history.
     */
    public function histMutJenMut(): BelongsTo
    {
        return $this->belongsTo(JenMut::class, 'jen_id', 'id');
    }
}
