<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenPegLast extends Model
{
    /** @use HasFactory<\Database\Factories\RenPegLastFactory> */
    use HasFactory;

    protected $connection = 'agency';
    protected $table = 'ren_peg_last';
}
