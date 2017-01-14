<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sticker;
use App\StickerCategory;
use UUID;

class ControllerStickers extends Controller
{

    public function welcome()
    {
        $stickers = Sticker::orderBy('created_at','desc')->paginate(6);
        return view('welcome')->with(['stickers' => $stickers]);
    }

    public function index()
    {
        $stickers = Sticker::orderBy('id','asc')->paginate(20);
        return view('stickers.index')->with([
            'stickers' => $stickers
        ]);   
    }

    public function create()
    {
        $category = StickerCategory::pluck('category', 'id');
        return view('stickers.create')->with(['category' => $category]);
    }

    public function store(Request $request)
    {
        $sticker                        = new Sticker();
        $sticker->name                  = $request['name'];
        $sticker->price                 = $request['price'];
        $sticker->height                = $request['height'];
        $sticker->width                 = $request['width'];
        $sticker->sticker_category_id   = $request['category'];
        $imageName                      = $request['image-name'];
        $route                          = public_path('images/stickers');
        $sticker->picture               = $imageName;
        $request->file('picture')->move($route, $imageName);
        $sticker->save();
        
        $stickers = Sticker::orderBy('id','asc')->paginate(20);
        return view('stickers.index')->with(['stickers' => $stickers]);
    }

    public function show($id)
    {
        $sticker      = Sticker::find($id);
        $category     = StickerCategory::where('id', $sticker->sticker_category_id);

        return view('stickers.show')->with([
            'sticker'      => $sticker,
            'category'  => $category,
        ]);
    }

    public function edit($id)
    {
        $sticker      = Sticker::find($id);
        $category     = StickerCategory::pluck('category', 'id');
     
        return view('stickers.edit')->with([
            'category' => $category, 
            'sticker' => $sticker
        ]);
    }

    public function update(Request $request, $id)
    {
        $sticker                        = Sticker::find($id);
        $sticker->name                  = $request['name'];
        $sticker->price                 = $request['price'];
        $sticker->height                = $request['height'];
        $sticker->width                 = $request['width'];
        $sticker->sticker_category_id   = $request['category'];
        $imageName                      = $request['image-name'];
        $route                          = public_path('images/stickers');
        $sticker->picture               = $imageName;
        $request->file('picture')->move($route, $imageName);
        $sticker->save();
        $stickers = Sticker::orderBy('id','asc')->paginate(20);
        return view('stickers.index')->with(['stickers' => $stickers]);
    }

    public function category(){
        $stickers = Sticker::orderBy('id','asc')->paginate(20);
        return view('categories')->with([
            'stickers' => $stickers
        ]);   
    }

    public function destroy($id)
    {
        //
    }
}
