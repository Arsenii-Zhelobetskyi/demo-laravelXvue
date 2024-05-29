<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Items;

class MainController extends Controller
{
    public function home(){
         // Fetch all data from the items table
         $items = Items::all();

        return Inertia::render('Home',['items'=>$items,]);
    }
    public function about(){

        return Inertia::render('About');
    }
    public function addItemApi(Request $request)
    {
        
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'desc' => 'required|string',
        ]);

        $item = Items::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
        ]);

        return response()->json($item, 201);
    }
    public function addItem(){
        return Inertia::render('AddItem');
    }
}
