<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Element;

class ElementController extends Controller
{
    // Affichage des elements

    public function index()
    {
        $element = Element::all();

        return view('element.index', compact('element'));
    }
//  Creation d'un element
    public function create()
    {
        $element = new Element();
        return view('element.create', compact('element'));
    }
// Ajout d'un element
    public function store()
    {
        $element = Element::create($this->validateData());
        return redirect('/element/'.$element->id);
    }

    //Route Model Binding => \App\Customer $var
    //Affichage d'un element
    public function show(Element $element)
    {
        return view('element.show', compact('element'));
    }
// formulaire de modification d'un element
    public function edit(Element $element)
    {
        return view('element.edit', compact('element'));
    }
// modification d'un element
    public function update(Element $element)
    {
        $element->update($this->validateData());    

        return redirect('/element/'.$element->id);
    }
// suppression d'un element 
    public function destroy(Element $element)
    {
        $element->delete();

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
        return Element::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Element::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Element $element)
    {
        return $element;
    }

    
    public function restUpdate(Element $element)
    {
        return $element->update($this->validateData());
    }

    public function RestDestroy(Element $element)
    {
        return $element->delete();
    }
}
        