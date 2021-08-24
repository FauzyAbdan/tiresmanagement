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
        $tire_types = TireType::latest()->get();

        return view('tires.create', compact('tire_types'));

    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([

        //I think I can't put unique parameter here for tire_codes name column
        'name'      => 'required|unique:tire_codes|min:2',
        'tire_type_id' => 'nullable',


        
        ]);
        
        TireCode::create($validatedData);

        $request->session()->flash('success', 'You just added new tire');

        return redirect('/');
}
}