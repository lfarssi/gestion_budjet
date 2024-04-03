<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePersonnelsRequest;
use App\Http\Requests\StorePersonnelsRequest;
use App\Models\Etablissement;
use App\Models\Fonction;
use App\Models\Grade;
use App\Models\Matiere;
use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index(){
        $personnes=Personnel::all();
         return view("components.personne.personne",compact('personnes'));
    }
    public function create(){
        $grades = Grade::all();
        $fonctions = Fonction::all();
        $matieres = Matiere::all();
        $etablissements = Etablissement::all();
        return view("components.personne.add-personne", compact('etablissements','grades', 'fonctions', 'matieres'));
    }
    public function store(StorePersonnelsRequest $request)
    {
        $formsFields = $request->validated();

        $etablissement = Etablissement::findOrFail($formsFields['etabs']);
        $grade = Grade::findOrFail($formsFields['grade']);
        $fonction = Fonction::findOrFail($formsFields['fonction']);
        $matiere = Matiere::findOrFail($formsFields['matiere']);
        $formsFields['etabs'] = $etablissement->NomAr;
        $formsFields['grade'] = $grade->libelleAr;
        $formsFields['fonction'] = $fonction->libelleAr;
        $formsFields['matiere'] = $matiere->libelleAr;

        Personnel::create($formsFields);

        return to_route('personne',$request->id)->with('primary','personne ajouter avec succès');
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $personne=Personnel::findOrFail($id);
        return view('components.personne.show-personne',compact('personne'));
    }
    public function edite(Personnel $id)
    {
        return view('components.personne.edite-personne', compact('id'));
    }
    public function update(UpdatePersonnelsrequest $request, Personnel $personnel)
    {
        $formsField=$request->validated();
        $etablissement = Etablissement::findOrFail($formsField['etabs']);
        $grade = Grade::findOrFail($formsField['grade']);
        $fonction = Fonction::findOrFail($formsField['fonction']);
        $matiere = Matiere::findOrFail($formsField['matiere']);
        $formsField['etabs'] = $etablissement->NomAr;
        $formsField['grade'] = $grade->libelleAr;
        $formsField['fonction'] = $fonction->libelleAr;
        $formsField['matiere'] = $matiere->libelleAr;
        $personnel->fill($formsField)->save();
        return to_route('personne',$personnel->id)->with('success','personne modifié avec succès');
    }
    public function destroy(Personnel $id)
    {
        $id->delete();
        return to_route('personne')->with('danger','personne supprimer avec succès');
    }
   
}
