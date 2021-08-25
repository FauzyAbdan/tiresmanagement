<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TireCode;
use App\Models\TireType;

class TireCodeController extends Controller
{
    public function index()
    {
       
        $tire_codes = TireCode::with('type')->paginate(5);

        return view('tires.index', compact('tire_codes'));

        
    }
  
    public function create()
    {
        $tire_types = TireType::get();

        return view('tires.create', compact('tire_types'));

    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([

        //I want this name to be unique only if the user choose the same tire_type
        'name'      => 'required|unique:tire_codes|min:2',
        'tire_type_id'      =>  'required',
        


        
        ]);
        
        
        TireCode::create($validatedData);

        $request->session()->flash('success', 'You just added new tire');

        return redirect('/');
}
}