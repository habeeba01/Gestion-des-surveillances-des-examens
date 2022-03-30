<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Secretaire;
use \App\Etudiant;

class SecretaireController extends Controller
{
    public function index()
    {
        $secretaire = Secretaire::all();
        $etudiants = Etudiant::all();

        return view('secretaire.index', compact('etudiants'));
    }

    public function create()
    {
        $secretaire = new Secretaire();
        return view('secretaire.create', compact('secretaire'));
    }

    public function store()
    {
        $secretaire = Secretaire::create($this->validateData());
        return redirect('secretaire/'.$secretaire->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Secretaire $secretaire)
    {
        return view('secretaire.show', compact('secretair'));
    }

    public function edit(Secretaire $secretaire)
    {
        return view('secretaire.edit', compact('secretair'));
    }

    public function update(Secretaire $secretaire)
    {
        $secretaire->update($this->validateData());    

        return redirect('secretaire/'.$secretaire->id);
    }

    public function destroy(Secretaire $secretaire)
    {
        $secretaire->delete();

        return redirect('/secretaire');
    }


    public function validateData()
    {
        return request()->validate([
			'idsec' => 'required|',

			'nomsec' => 'required|max:20|',

			'prenomsec' => 'required|max:20|',

			'emailsec' => 'required|max:20|',

			'telsec' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Secretaire::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Secretaire::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Secretaire $secretair)
    {
        return $secretaire;
    }

    
    public function restUpdate(Secretaire $secretair)
    {
        return $secretaire->update($this->validateData());
    }

    public function RestDestroy(Secretaire $secretair)
    {
        return $secretaire->delete();
    }
}
        