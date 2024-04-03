<?php

namespace App\Http\Controllers;

use App\Models\Jury;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJuryRequest;
use App\Http\Requests\UpdateJuryRequest;

class JuryController extends Controller
{
    public function index(){
        $juries=Jury::paginate(5);
         return view("components.Jury.jurie",compact('juries'));
    }
    public function create(){
        return view("components.Jury.add-jurie");
    }
    public function store(StoreJuryRequest $request)
    {
        $formsFields = $request->validated();

        Jury::create($formsFields);

        return to_route('Jury',$request->id)->with('primary','Jury ajouter avec succès');
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $Jury=Jury::findOrFail($id);
        return view('components.Jury.show-jurie',compact('Jury'));
    }
    public function edite(Jury $id)
    {
        return view('components.Jury.edite-jurie', compact('id'));
    }
    public function update(UpdateJuryRequest $request, Jury $id)
    {
        $formsField=$request->validated();
        $id->fill($formsField)->save();
        // dd($Jury);
        return to_route('Jury',$id->id)->with('success','Jury modifié avec succès');
    }
    public function destroy(Jury $id)
    {
        $id->delete();
        return to_route('jury')->with('danger','jury supprimer avec succès');
    }
}
