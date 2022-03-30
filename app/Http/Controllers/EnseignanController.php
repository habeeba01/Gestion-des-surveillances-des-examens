<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Enseignan;

class EnseignanController extends Controller
{
    public function index()
    {
        $enseignant = Enseignan::all();

        return view('enseignant.index', compact('enseignant'));
    }

    public function create()
    {
        $enseignan = new Enseignan();
        return view('enseignant.create', compact('enseignan'));
    }

    public function store()
    {
        $enseignant = Enseignan::create($this->validateData());
        return redirect('/enseignant/'.$enseignant->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Enseignan $enseignan)
    {
        return view('enseignant.show', compact('enseignan'));
    }

    public function edit(Enseignan $enseignan)
    {
        return view('enseignant.edit', compact('enseignan'));
    }

    public function update(Enseignan $enseignan)
    {
        $enseignan->update($this->validateData());    

        return redirect('/enseignant/'.$enseignant->id);
    }

    public function destroy(Enseignan $enseignan)
    {
        $enseignan->delete();

        return redirect('/enseignant');
    }


    public function validateData()
    {
        return request()->validate([
			'idens' => 'required|',

			'nomens' => 'required|max:20|',

			'prenomens' => 'required|max:20|',

			'emailens' => 'required|max:20|',

			'telens' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Enseignan::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Enseignan::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Enseignan $enseignan)
    {
        return $enseignan;
    }

    
    public function restUpdate(Enseignan $enseignan)
    {
        return $enseignan->update($this->validateData());
    }

    public function RestDestroy(Enseignan $enseignan)
    {
        return $enseignan->delete();
    }
}
        