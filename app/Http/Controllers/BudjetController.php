<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudjetRequest;
use App\Http\Requests\StoreBudjetRequest;
use App\Http\Requests\UpdateBudjetRequest;
use App\Models\Budjet;
use Illuminate\Http\Request;

class BudjetController extends Controller
{
    public function index(){
        $budjets=Budjet::paginate(5);
         return view("components.budjet.budjet",compact('budjets'));
    }
    public function create(){
        return view("components.budjet.add-budjet");
    }
    public function store(StoreBudjetRequest $request)
    {
        $formsFields = $request->validated();

        Budjet::create($formsFields);

        return to_route('budjet',$request->id)->with('primary','budjet ajouter avec succès');
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $budjet=Budjet::findOrFail($id);
        return view('components.budjet.show-budjet',compact('budjet'));
    }
    public function edite(Budjet $id)
    {
        return view('components.budjet.edite-budjet', compact('id'));
    }
    public function update(UpdateBudjetRequest $request, Budjet $id)
    {
        $formsField=$request->validated();
        $id->fill($formsField)->save();
        // dd($budjet);
        return to_route('budjet',$id->id)->with('success','budjet modifié avec succès');
    }
    public function destroy(Budjet $id)
    {
        $id->delete();
        return to_route('budjet')->with('danger','budjet supprimer avec succès');
    }
}
