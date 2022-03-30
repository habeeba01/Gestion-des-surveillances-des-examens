<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Module;
use \App\Element;
use \App\Note;

class ModuleController extends Controller
{
    protected $depa='GI';
    // Affichage des modules
    public function index()
    {
        $modules = Module::where('nomdep_',  $this->depa)->get();
        return view('module.index', compact('modules'));
    }
    // Creation d'un module
    public function create()
    {
        $module = new Module();
        return view('module.create', compact('module'));
    }
    // ajout d'un module
    public function store()
    {
        $module = Module::create($this->validateData());
        return redirect('/module/'.$module->id);
    }

    //Route Model Binding => \App\Customer $var
    // Affichage des element d'un module choisi
    public function show(Module $module)
    {
        // echo 'hahah';
        // echo $module->nommod;
        $elements = Element::where('module_id',  $module->id)->get();
        $notes = array();
        foreach($elements as $element)
        {
            // print_r($element);echo"<br>";
            $note = Note::where('element_id',  $element->id)->first();;
            // print_r($note);echo"<br>";
            $notes[$element->id]=$note;
            // print_r($notes[$element->id]);echo"<br>";
        }
        // print_r($elements);echo"<br>";
        // print_r($notes);
        return view('module.show', compact('module','elements','notes'));
    }
    // Formulaire de modification
    public function edit(Module  $module)
    {
        return view('module.edit', compact('modul'));
    }
    // Modifier un module
    public function update(Module  $module)
    {
        $module->update($this->validateData());    

        return redirect('/module/'.$module->id);
    }
    // Supprimer un module
    public function destroy(Module $module)
    {
        $module->delete();

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
        return Module::limit(99)->offset($limit)->get();
    }

    public function restStore()
    {
        return Module::create($this->validateData());
    }

    //Route Model Binding => \App\Customer $var
    public function restShow(Module $module)
    {
        return $module;
    }

    
    public function restUpdate(Module $module)
    {
        return $module->update($this->validateData());
    }

    public function RestDestroy(Module $module)
    {
        return $module->delete();
    }
}
        