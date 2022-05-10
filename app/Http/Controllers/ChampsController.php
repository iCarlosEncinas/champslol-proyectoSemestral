<?php

namespace App\Http\Controllers;

use App\Models\Champ;
use Illuminate\Http\Request;

class ChampsController extends Controller
{
    public function create(){
        return view('champs.create');
    }

    public function store(Request $request){
        $nuevoChamp = new Champ();
        $nuevoChamp->campeon = $request->input('campeon');
        $nuevoChamp->clase = $request->input('clase');
        $nuevoChamp->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        $nuevoChamp->esencia_azul = $request->input('esencia_azul');
        $nuevoChamp->riot_points = $request->input('riot_points');

        if($request->file('evidence')){
            $path_evidence->file('evidence')->store('public/evidences');

            if($path_evidence){
                $nuevoChamp->evidence = $request->file('evidence')->hashName();
            }
        }

        if($nuevoChamp->save()){
            return redirect()->route('variantes.create');
        }
        return redirect()->route('champ.create');
    }
}
