<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $cards = Card::where('status', 2)->latest('id')->paginate(9);

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card){
        return view('cards.show', compact('card'));
    }

    public function category(Category $category){
        $cards = Card::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);

        return view('cards.category', compact('cards', 'category'));
    }
}
