<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenSkMut extends Model
{
    // Turn off timestamps
    public $timestamps = false;

    /** @use HasFactory<\Database\Factories\JenMutFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sk_id',
        'jen_id',
    ];
}
