<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    /** @use HasFactory<\Database\Factories\UnitFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'skt',
        'kode',
    ];

    /**
     * Show that 1 Unit Before can have Multiple History Entries.
     */
    public function ukBefHist(): HasMany
    {
        return $this->hasMany(HistMut::class, 'uker_bef_id', 'id');
    }

    /**
     * Show that 1 Unit After can have Multiple History Entries.
     */
    public function ukAftHist(): HasMany
    {
        return $this->hasMany(HistMut::class, 'uker_aft_id', 'id');
    }
}
