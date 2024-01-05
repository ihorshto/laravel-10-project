<?php

namespace App\Http\Controllers;

use App\Models\Hetmans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Validation\Validator;
class HetmansController extends Controller
{
    public function index()
    {
        $hetmans = Hetmans::all();
        return view('hetmans.index', compact('hetmans'));
    }

    public function show($id)
    {
        $hetman = Hetmans::findOrFail($id);
        return view('hetmans.getone', compact('hetman'));
    }

    public function create()
    {
        return view('hetmans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'years_of_reign' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->get('point') == 'on') {
           $request->merge(['point' => '1']);
        } else {
            $request->merge(['point' => '0']);
        }

        Hetmans::create(
            [
                'first_name'=> $request->get('first_name'),
                'last_name'=> $request->get('last_name'),
                'years_of_reign' => $request->get('years_of_reign'),
                'description'=> $request->get('description'),
                'point' => $request->get('point'),
            ]
        );

        return redirect()->route('hetmans.index')->with('success', 'Hetman created successfully!');
    }

    public function edit(Hetmans $hetman)
    {
        return view('hetmans.edit', compact('hetman'));
    }
    public function update(Request $request, Hetmans $hetman)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'years_of_reign' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $hetman->update($request->all());

        return redirect()->route('hetmans.index');
    }

    // public function update(Request $request, Hetmans $hetman)
    // {
    //     dd($request->get('id'));
    //     $hetman->update($request->all());
    //     return redirect()->route('hetmans.index');
    // }

    public function destroy(Hetmans $hetman)
    {
        $hetman->delete();
        return redirect()->route('hetmans.index');
    }

}
