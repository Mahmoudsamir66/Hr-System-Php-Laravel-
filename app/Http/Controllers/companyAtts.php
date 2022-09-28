<?php

namespace App\Http\Controllers;

use App\Models\Atts;
use Illuminate\Http\Request;

class companyAtts extends Controller
{
    function create()
    {
        $Atts = Atts::get();
        return view('companyAtts.create', compact('Atts'));

    }

    function store(Request $request)
    {
        Atts::updateOrCreate([
            'name' => $request->name
        ], [
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'user_id'=> auth()->user()->id,
        ]);
        return redirect()->back();

    }
    function delete(Atts $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
