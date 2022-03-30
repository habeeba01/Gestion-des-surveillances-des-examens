<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Departement;

class DepartementController extends Controller
{
    public function index()
    {
        $departement = Departemen::all();

        return view('departement.index', compact('departement'));
    }

    public function create()
    {
        $departement = new Departement();
        return view('departement.create', compact('departement'));
    }

    public function store()
    {
        $departement = Departement::create($this->validateData());
        return redirect('/departement/'.$departement->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Departement $departement)
    {
        return view('departement.show', compact('departement'));
    }

    public function edit(Departement $departemen)
    {
        return view('departement.edit', compact('departement'));
    }

    public function update(Departement $departement)
    {
        $departement->update($this->validateData());    

        return redirect('/departement/'.$departement->id);
    }

    public function destroy(Departement $departement)
    {
        $departement->delete();

        return redirect('/departement');
    }


    public function validateData()
    {
        return request()->validate([
			'nomdep' => 'required|max:40|',

			'description' => 'required|max:50|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Departement::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Departement::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Departement $departement)
    {
        return $departement;
    }

    
    public function restUpdate(Departement $departement)
    {
        return $departement->update($this->validateData());
    }

    public function RestDestroy(Departement $departement)
    {
        return $departement->delete();
    }
}
        