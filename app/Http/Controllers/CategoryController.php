<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index()
    {
        if(Gate::allows('isAdmin')) {
            return Category::all();
        }
        return response()->json('You can use this', 403);
    }
}
