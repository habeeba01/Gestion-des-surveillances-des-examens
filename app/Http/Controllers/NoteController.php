<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        $note = new Note();
        return view('notes.create', compact('note'));
    }

    public function store()
    {
        $notes = Note::create($this->validateData());
        return redirect('/notes/'.$notes->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Note $note)
    {
        $note->update($this->validateData());    

        return redirect('/notes/'.$notes->id);
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }


    public function validateData()
    {
        return request()->validate([
			'id' => '',

			'module_id' => 'required|',

			'element_id' => 'required|',

			'notefinale' => 'required|',

			'noteds' => 'required|',

			'coeffds' => 'required|',

			'coeffexam' => 'required|',

			'coefftp' => 'required|',

			'noteexam' => 'required|',

			'notetp' => 'required|',

			'noteelem' => 'required|',

			'notemod' => 'required|',

			'user_id' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Note::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Note::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Note $note)
    {
        return $note;
    }

    
    public function restUpdate(Note $note)
    {
        return $note->update($this->validateData());
    }

    public function RestDestroy(Note $note)
    {
        return $note->delete();
    }
}
        