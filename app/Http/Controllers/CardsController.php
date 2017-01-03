<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index()
    {
    	# code...
    	//$cards = DB::table('cards')->get();
    	$cards = Card::all();
    	return view('cards.index',compact('cards'));
    }
    public function show(Card $card)
    {
    	# code...
        $card->load('notes.user');
    	return view('cards.show',compact('card'));
    }
}
