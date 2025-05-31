<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluaiton extends Model
{
    use HasFactory;

    protected $table = 'evaluation';

    protected $fillable = [
        'description',
        'created_at',
    ];
}
