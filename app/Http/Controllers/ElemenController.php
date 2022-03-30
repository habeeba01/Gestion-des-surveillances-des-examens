<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Elemen;

class ElemenController extends Controller
{
    public function index()
    {
        $element = Elemen::all();

        return view('element.index', compact('element'));
    }

    public function create()
    {
        $elemen = new Elemen();
        return view('element.create', compact('elemen'));
    }

    public function store()
    {
        $element = Elemen::create($this->validateData());
        return redirect('/element/'.$element->id);
    }

    //Route Model Binding => \App\Customer $var
    public function show(Elemen $elemen)
    {
        return view('element.show', compact('elemen'));
    }

    public function edit(Elemen $elemen)
    {
        return view('element.edit', compact('elemen'));
    }

    public function update(Elemen $elemen)
    {
        $elemen->update($this->validateData());    

        return redirect('/element/'.$element->id);
    }

    public function destroy(Elemen $elemen)
    {
        $elemen->delete();

        return redirect('/element');
    }


    public function validateData()
    {
        return request()->validate([
			'nomelem' => 'required|max:30|',

			'coeff' => 'required|',

			'noteelem' => 'required|',

			'nommod' => 'required|max:30|',

			'idens' => 'required|',
		]);
 }


    //----------------------------------------Rest Controllers----------------------
    
    public function restIndex($limit = 0)
    {
        return Elemen::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Elemen::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Elemen $elemen)
    {
        return $elemen;
    }

    
    public function restUpdate(Elemen $elemen)
    {
        return $elemen->update($this->validateData());
    }

    public function RestDestroy(Elemen $elemen)
    {
        return $elemen->delete();
    }
}
        