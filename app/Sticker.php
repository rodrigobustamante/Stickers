<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StickerCategory;

class Sticker extends Model
{
    protected $fillable = [
        'name', 'price', 'picture', 'height', 'width', 'sticker_category_id'
    ];

    public function stickerCategory()
    {
        return $this->belongsTo(StickerCategory::class);
    }
}
