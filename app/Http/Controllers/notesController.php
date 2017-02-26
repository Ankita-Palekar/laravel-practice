<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class notesController extends Controller
{
    public function store(Request $request, Card $card){
      $this->validate($request, ['body' => 'required']);
      $note = new Note();
      $note->body = $request->body;
      $card->notes()->save($note);
      return back();
    }

    public function display(Note $note){
      return view('notes.show', compact('note'));
    }

    public function editNote(Note $note){
      return view('notes.edit', compact('note'));
    }

    public function edit(Request $request, Note $note){
      $note->body = $request->body;
      $note->save();
      return back();
    }

}
