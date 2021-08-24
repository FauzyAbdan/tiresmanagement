<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TireType;

class TireTypeController extends Controller
{
    public function index()
    {
        return view('tiretypes.index',[
            "tire_types" => TireType::latest()->paginate(8),
            
        ]);
    }

    public function create()
    {
        return view('tiretypes.create');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name'      => 'required|unique:tire_types|min:2',
        ]);
        
        TireType::create($validatedData);

        $request->session()->flash('success', 'You just added new tire type');

        return redirect('/tiretypes');


        // $tire_types     = new TireType;
        // $tire_types->name     = $request->name;
        // $tire_types->save();
       
        // return back()->with('success', 'The tire type created successfully.');
    }
}
