<?php

namespace App\Http\Controllers;

use cloudinary;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function store(Request $request)
    {
        $img_clooudinary = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        $menu = new Menu;
        $menu->category_id = $request->category_id;
        $menu->user_id = $request->user_id;
        $menu->image = $img_clooudinary;
        $menu->name = $request->name;
        $menu->price = $request->price;
        // $data = Menu::create([
        //     'category_id' => $request->category_id,
        //     'user_id' => $request->user_id,
        //     'image' => $img_clooudinary,
        //     'name' => $request->name,
        //     'price' => $request->price,
        // ]);
        $menu->save();

        return response()->json([
            'status' => 'success',
            'data' => $menu
        ]);
    }

    public function getMenu(User $user)
    {
        $data = User::with(['categories', 'menus'])->find($user->id);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function delete(Menu $menu)
    {
        $menu->delete();

        return response()->json([
            'status' => 'success',
            'data' => $menu
        ]);
    }
}