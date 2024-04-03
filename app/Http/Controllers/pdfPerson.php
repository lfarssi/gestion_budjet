<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use App\Models\Personnel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pdfController extends Controller
{
    public function generatePDF(){
        $personne=DB::table("personnels")
        ->join("details_corrections","personnels.id","=","details_correct.person")
        ->select("personnels.*","details_correct.*")
        ->get();
        $data=[ 
            "logo"=>"../../../public/download.png",
            "title"=>"وزارة التربية والتعليم",
            "date"=>date("Y-m-d H:i:s"),
            "personnes"=>$personne
        ];
        $pdf=Pdf::loadView('personne-pdf',$data);
        return $pdf->download('invoice.pdf');
    }
}
