<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function show(){
       $leads_dentist = DB::select('SELECT * FROM leads WHERE type = "dentista"');
       $leads_pacient = DB::select('SELECT * FROM leads WHERE type = "paciente"');
       $leads_pacient_needed = DB::select('SELECT * FROM leads WHERE type = "paciente" and needed = "1"');

       return view('admin')->with(['leads_dentist' => count($leads_dentist), 'leads_pacient' => count($leads_pacient), 'leads_pacient_needed' => count($leads_pacient_needed)]);
    }
}
