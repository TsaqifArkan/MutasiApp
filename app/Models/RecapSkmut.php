<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecapSkmut extends Model
{
    /** @use HasFactory<\Database\Factories\RecapSkmutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'no_sk',
        'full_no_sk',
        'tgl_sk',
        'ttg_sk',
        'file_sk',
    ];
}
