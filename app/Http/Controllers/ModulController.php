<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modul;

class ModulController extends Controller
{
    public function index()
    {
        $module = Modul::all();

        return view('module.index', compact('module'));
    }

    public function create()
    {
        $modul = new Modul();
        return view('module.create', compact('modul'));
    }

    public function store()
    {
        $module = Modul::create($this->validateData());
        return redirect('/module/'.$module->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Modul $modul)
    {
        return view('module.show', compact('modul'));
    }

    public function edit(Modul $modul)
    {
        return view('module.edit', compact('modul'));
    }

    public function update(Modul $modul)
    {
        $modul->update($this->validateData());    

        return redirect('/module/'.$module->id);
    }

    public function destroy(Modul $modul)
    {
        $modul->delete();

        return redirect('/module');
    }


    public function validateData()
    {
        return request()->validate([
			'nommod' => 'required|max:30|',

			'notemod' => 'required|',

			'nbelem' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Modul::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Modul::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Modul $modul)
    {
        return $modul;
    }

    
    public function restUpdate(Modul $modul)
    {
        return $modul->update($this->validateData());
    }

    public function RestDestroy(Modul $modul)
    {
        return $modul->delete();
    }
}
        