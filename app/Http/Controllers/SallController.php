<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sall;

class SallController extends Controller
{
    public function index()
    {
        $salle = Sall::all();

        return view('salle.index', compact('salle'));
    }

    public function create()
    {
        $sall = new Sall();
        return view('salle.create', compact('sall'));
    }

    public function store()
    {
        $salle = Sall::create($this->validateData());
        return redirect('/salle/'.$salle->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Sall $sall)
    {
        return view('salle.show', compact('sall'));
    }

    public function edit(Sall $sall)
    {
        return view('salle.edit', compact('sall'));
    }

    public function update(Sall $sall)
    {
        $sall->update($this->validateData());    

        return redirect('/salle/'.$salle->id);
    }

    public function destroy(Sall $sall)
    {
        $sall->delete();

        return redirect('/salle');
    }


    public function validateData()
    {
        return request()->validate([
			'numsalle' => 'required|',

			'capacite' => 'required|',

			'type' => 'required|max:20|',

			'nbsurv' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Sall::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Sall::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Sall $sall)
    {
        return $sall;
    }

    
    public function restUpdate(Sall $sall)
    {
        return $sall->update($this->validateData());
    }

    public function RestDestroy(Sall $sall)
    {
        return $sall->delete();
    }
}
        