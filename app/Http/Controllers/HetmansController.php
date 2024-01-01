<?php

namespace App\Http\Controllers;

use App\Models\Hetmans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HetmansController extends Controller
{
    public function index()
    {
        $hetmans = Hetmans::all();
        return view('hetmans.index', compact('hetmans'));
    }

    public function show($id)
    {
        // dd($id);
        $hetman = Hetmans::findOrFail($id);
        return view('hetmans.getone', compact('hetman'));
    }

    public function create()
    {
        // $hetmans = DB::insert();

        $hetman = DB::table('hetmans')->insert([
        'first_name'=> 'Bogdan',
        'last_name'=> 'Khmelnitsky',
            'years_of_reign' => '1648–1654',
        'description'=> "Un chef militaire et politique des Cosaques d'Ukraine, alors territoire relevant de la république des Deux Nations",
        'point' => true,
        ]);


        return view('hetmans.create');


    }

    public function store(Request $request)
    {
        Hetmans::create($request->all());
        return redirect()->route('hetmans.index');
    }

    public function edit(Hetmans $hetman)
    {
        return view('hetmans.edit', compact('hetman'));
    }

    public function update(Request $request, Hetmans $hetman)
    {
        $hetman->update($request->all());
        return redirect()->route('hetmans.index');
    }

    public function destroy(Hetmans $hetman)
    {
        $hetman->delete();
        return redirect()->route('hetmans.index');
    }

}
