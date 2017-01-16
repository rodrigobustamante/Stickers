<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StickerCategory extends Model
{
    protected $fillable = [
        'category'
    ];

    public function stickers()
    {
    	return $this->hasMany(Sticker::class);
    }
}
