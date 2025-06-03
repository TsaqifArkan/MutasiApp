<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKDetailJabatan extends Model
{
    /** @use HasFactory<\Database\Factories\SKDetailJabatanFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sk_rec_id',
        'jab_id',
        'jumlah',
    ];
}
