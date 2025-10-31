<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GolPkt extends Model
{
    /** @use HasFactory<\Database\Factories\GolPktFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'pangkat',
        'gol',
    ];

    /**
     * Show that 1 Golongan/Pangkat can be owned by Multiple Employees.
     */
    public function golPktEmp(): HasMany
    {
        return $this->hasMany(Employee::class, 'gpk_id', 'id');
    }
}
