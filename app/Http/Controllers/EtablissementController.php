<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtablissementRequest;
use App\Http\Requests\UpdateEtablissementRequest;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    public function index()
    {
        $etablissements=Etablissement::all();
        return view("components.etablissement.etablissement",compact("etablissements"));
    }
    public function __invoke()
{
}
    public function create()
    {
        
        return view("components.etablissement.add-etablissement");
    }
    public function store(StoreEtablissementRequest $request)
    {
        $formsField = $request->validated();
        Etablissement::create($formsField);
        return to_route('etablissement')->with('primary','etablissement ajouter avec succès');
    }
    public function show(Request $request)
    {
        $id=(int)$request->id;
        $etablissement=Etablissement::findOrFail($id);
        return view('components.etablissement.show-etablissement',compact('etablissement'));
    }
    public function edite(Etablissement $id)
    {
        return view('compoenents.etablissement.edite-etablissement', compact('id'));
    }
    public function update(UpdateEtablissementRequest $request, Etablissement $id)
    {
        $formsField=$request->validated();
        $id->fill($formsField)->save();
        return to_route('etablissement')->with('success','etablissement modifié avec succès');
    }
    public function destroy(Etablissement $id)
    {
        $id->delete();
        return to_route('etablissement')->with('danger','etablissement supprimer avec succès');
    }
}
