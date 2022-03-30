<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Apparteni;

class ApparteniController extends Controller
{
    public function index()
    {
        $appartenir = Apparteni::all();

        return view('appartenir.index', compact('appartenir'));
    }

    public function create()
    {
        $apparteni = new Apparteni();
        return view('appartenir.create', compact('apparteni'));
    }

    public function store()
    {
        $appartenir = Apparteni::create($this->validateData());
        return redirect('/appartenir/'.$appartenir->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Apparteni $apparteni)
    {
        return view('appartenir.show', compact('apparteni'));
    }

    public function edit(Apparteni $apparteni)
    {
        return view('appartenir.edit', compact('apparteni'));
    }

    public function update(Apparteni $apparteni)
    {
        $apparteni->update($this->validateData());    

        return redirect('/appartenir/'.$appartenir->id);
    }

    public function destroy(Apparteni $apparteni)
    {
        $apparteni->delete();

        return redirect('/appartenir');
    }


    public function validateData()
    {
        return request()->validate([
			'nomdep' => 'required|max:30|',

			'idens' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Apparteni::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Apparteni::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Apparteni $apparteni)
    {
        return $apparteni;
    }

    
    public function restUpdate(Apparteni $apparteni)
    {
        return $apparteni->update($this->validateData());
    }

    public function RestDestroy(Apparteni $apparteni)
    {
        return $apparteni->delete();
    }
}
        