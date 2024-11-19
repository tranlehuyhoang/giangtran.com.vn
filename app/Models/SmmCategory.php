<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmmCategory extends Model
{
    use HasFactory;

    protected $table = 'smm_categories';

    protected $fillable = [
        'name',
        'image',
        'code',
    ];
}