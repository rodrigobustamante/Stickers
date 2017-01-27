<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sticker;
use App\StickerCategory;
class ControllerStickers extends Controller
{
/*    public function welcome()
    {
        $stickers   = Sticker::orderBy('created_at','desc')->paginate(6);
        $categories = StickerCategory::orderBy('category', 'asc')->paginate(20);
        return view('welcome')->with(['stickers' => $stickers, 'categories' => $categories]);
    }
*/
    public function index()
    {
        return Sticker::all();   
    }

    public function create()
    {
        $category = StickerCategory::pluck('category', 'id');
        return view('stickers.create')->with(['category' => $category]);
    }

    public function store(Request $request)
    {
        $sticker = new Sticker;
        $sticker->name = $request['name'];
        $sticker->price = $request['price'];
        $sticker->picture = $request['picture'];
        $sticker->height = $request['height'];
        $sticker->width = $request['width'];
        $sticker->sticker_category_id = $request['sticker_category_id'];
        $sticker->save();
        $message = array('message' => 'Sticker creado correctamente');
        return $message;
    }

    public function show($id)
    {
        $sticker      = Sticker::find($id);
        if(!$sticker){
            $message = array('message' => 'Sticker no encontrado');
            return $message;
        }else{
            return $sticker;
        }
    }


    public function update(Request $request, $id)
    {
        $sticker = Sticker::find($id);
        if(!$sticker){
            $message = array('message' => 'Sticker no encontrado');
            return $message;
        }else{
            $sticker->name = $request['name'];
            $sticker->price = $request['price'];
            $sticker->picture = $request['picture'];
            $sticker->height = $request['height'];
            $sticker->width = $request['width'];
            $sticker->sticker_category_id = $request['sticker_category_id'];
            $sticker->save();
            $message = array('message' => 'Sticker modificado correctamente');
            return $message;
        }


    }

    public function destroy($id)
    {
        $sticker = Sticker::find($id);
        if(!$sticker){
            $message = array('message' => 'Sticker no encontrado');
            return $message;
        }
    }
}
