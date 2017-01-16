<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sticker;
use App\StickerCategory;

class ControllerStickerCategory extends Controller
{
    public function show($id)
    {
        $category     = StickerCategory::find($id);
        $stickers     = Sticker::where('sticker_category_id', $category->id)->paginate(27);
        return view('category.show')->with([
            'category'      => $category,
            'stickers'  	=> $stickers,
        ]);
    }
}
