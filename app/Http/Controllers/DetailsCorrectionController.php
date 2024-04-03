<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailsCorrectionRequest;
use App\Http\Requests\UpdateBudjetRequest;
use App\Http\Requests\UpdateDetailsCorrectionRequest;
use App\Models\DetailsCorrection;
use App\Models\Jury;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsCorrectionController extends Controller
{
    public function index(){
        $details=DB::table("details_corrections")
        ->join("personnels","details_corrections.person","=","personnels.id")
        ->join("juries","details_corrections.jury","=","juries.id")
        ->select("details_corrections.*","juries.*","personnels.*")
        ->get();
         return view("components.dashboard.dashboard",compact('details'));
    }
    public function create(){
        return view("components.dashboard.add-dashboard");
    }
    public function store(StoreDetailsCorrectionRequest $request)
    {
        $formsFields = $request->validated();
        $personne = Personnel::findOrFail($formsFields['person']);
        $formsFields['person'] = $personne->nomFr;
        $jurie = Jury::findOrFail($formsFields['jury']);
        $formsFields['jury'] = $jurie->numJury;

        DetailsCorrection::create($formsFields);

        return to_route('/',$request->id)->with('primary','dashboard ajouter avec succès');
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $details=DetailsCorrection::findOrFail($id);
        return view('components.dashboard.show-dashboard',compact('details'));
    }
    public function edite(DetailsCorrection $id)
    {
        return view('components.dahsboard.edite-dashboard', compact('id'));
    }
    public function update(UpdateDetailsCorrectionRequest $request, DetailsCorrection $id)
    {
        $formsField=$request->validated();
        $personne = Personnel::findOrFail($formsField['person']);
        $formsField['person'] = $personne->nomFr;
        $jurie = Jury::findOrFail($formsField['jury']);
        $formsField['jury'] = $jurie->numJury;
        $id->fill($formsField)->save();
        return to_route('dashboard',$id->id)->with('success','dashboard modifié avec succès');
    }
    public function destroy(DetailsCorrection $id)
    {
        $id->delete();
        return to_route('dashboard')->with('danger','dashboard supprimer avec succès');
    }
}
