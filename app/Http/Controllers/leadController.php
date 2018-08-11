<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Lead;
use Illuminate\Http\Request;

class leadController extends Controller
{
    public function store(Request $request){
        $lead = new Lead;
        $lead->name = $request->input('name');
        $lead->email = $request->input('email');
        if ($request->input('needed') == "on")
            $lead->needed = true;
        else
            $lead->needed = false;
        $lead->type = $request->input('type');
        $lead->save();

        if ($lead->type == "paciente"){
            return view('response')->with(['type' => "pacientes", 'name' => $lead->name]);
        }

        else if($lead->type == "dentista"){
            return view('response')->with(['type' => "dentistas", 'name' => $lead->name]);
        }
    }
}
