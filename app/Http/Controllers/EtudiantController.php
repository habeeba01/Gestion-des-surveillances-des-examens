<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Etudiant;

class EtudiantController extends Controller
{
    protected $nomDep = 'GI';

    public function index()
    {

        $etudiants = Etudiant::where('nomdep', $this->nomDep)->get();

        return view('etudiant.index', compact('etudiants'));
    }
    //creation d'un nouveau etudiant
    public function create()
    {
        $etudiant = new Etudiant();
        return view('etudiant.create', compact('etudiant'));
    }
    //ajout d'un nouveau etudiant
    public function store()
    {
        echo 'hhdhd';
        print_r(request()->prenomet);
        $etudiant = Etudiant::create([
			'cne' => request()->cne,

			'ni' => request()->ni,

			'nomet' => request()->nomet,

			'prenomet' => request()->prenomet,

			'emailet' => request()->emailet,

            'nomdep' =>$this->nomDep,

			'password' => request()->password,
		]);
        return redirect('etudiant/');
    }

    //Route Model Binding => \App\Customer $var
    // Affichage d'un etudiant
    public function show(Etudiant $etudiant)
    {
    
        return view('etudiant.show', compact('etudiant'));
    }
    //formulaire du modification 
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.edit', compact('etudiant'));
    }
    //la modification d'un etudiant
    public function update(Etudiant $etudiant)
    {
        // $etudiant->update($this->validateData());   
        print_r( request()->nomet);
        Etudiant::where('cne',  request()->cne)->update([
			'ni' => request()->ni,

			'nomet' => request()->nomet,

			'prenomet' => request()->prenomet,

			'emailet' => request()->emailet,

            'nomdep' => $this->nomDep,

			'password' => request()->password,
		]);
        return redirect('etudiant/'.request()->cne);
    }
    //Suppression 
    public function destroy(Etudiant $etudiant)
    {
       Etudiant::where('cne',  request()->cne)->delete();

        return redirect('/etudiant');
    }


    public function validateData()
    {
        return request()->validate([
			'cne' => 'required|max:10|',

			'ni' => 'required|max:30|',

			'nomet' => 'required|max:20|',

			'prenomet' => 'required|max:20|',

			'emailet' => 'required|max:20|',

			'password' => 'required|max:20|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Etudiant::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Etudiant::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Etudiant $etudiant)
    {
        return $etudiant;
    }

    
    public function restUpdate(Etudiant $etudiant)
    {
        return $etudiant->update($this->validateData());
    }

    public function RestDestroy(Etudiant $etudiant)
    {
        return $etudiant->delete();
    }
}
        