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
    public static function getAllCategories()
    {
        return self::all();
    }
    public function image()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
