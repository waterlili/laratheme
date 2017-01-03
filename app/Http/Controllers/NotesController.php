<?php

namespace App\Http\Controllers;
use App\Note;
use App\Card;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	# code...
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);
    	// $card->addNote($note)
    	$card->addNote(

               new Note($request->all())
    		);
    	return back();
    	
    }
    public function edit(Note $note)
    {
        # code...
        return view('notes.edit',compact('note'));
    }
    public function update(Request $request,Note $note)
    {
        # code...
       
        $note->update($request->all());
        return back();
    }
}
