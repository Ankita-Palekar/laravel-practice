<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class cardsController extends Controller
{
    public function get(){
//      $cards = DB::table('cards')->get();
      $cards = Card::all();
      return view('cards.index', compact('cards'));
    }

    public function show(Card $card){
//      $card = Card::find($id);
      return view('cards.show', compact('card'));
    }
}



