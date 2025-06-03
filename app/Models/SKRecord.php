<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKRecord extends Model
{
    /** @use HasFactory<\Database\Factories\SKRecordFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tgl_sk',
        'no_sk',
        'periode',
        'jenis_sk',
    ];
}
