<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awcodes\Curator\Models\Media;
class SmmCategory extends Model
{
    use HasFactory;
    protected $table = 'smm_categories';

    protected $fillable = [
        'image',
        'name',
        'code',
    ];
    public function media()
    {
        return $this->belongsTo(Media::class, 'image');
    }

}
