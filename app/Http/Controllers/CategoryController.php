<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function getCategory(User $user)
    {
        $category = User::with(['categories', 'menus'])->find($user->id);

        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
        ]);


        $category = Category::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
        ]);

        return response()->json([
            'Category successfully created',
            'data' => $category
        ]);
    }

    public function delete(Category $category)
    {
        $category->delete();

        return response()->json([
            'status' => 'Category Successfully Deleted!',
            'data' => $category
        ]);
    }

    public function findMenuById(User $user, Category $category)
    {
        $data = Menu::where('category_id', $category->id)->where('user_id', $user->id)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}