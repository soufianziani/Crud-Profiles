<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // affichage : 
    public function index()
    {   //all()
        // asc = 12345....
        // desc = ....54321
        $pro = profiles::OrderBy('Name', 'asc')->get();
        return view('pages.affichage' , compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   // methode 1 :_______________________
        $profile= new profiles();
        $profile->Name = $request ->N;
        $profile->Email = $request ->E;
        $profile->age = $request ->a;
        $profile->save();
        //_____________________________________
        //methode 2 :__________________________ 
        //ajouter en model fillable
        // profiles ::create([
        // 'Name' => $request ->N,
        // 'Email' => $request ->E,
        // 'age' => $request ->a
        // ]);
        //_____________________________________
        //Mthode 3 :___________________________ 
        // name input  = nom de champ 
        //ajouter en model fillable
        //profiles::create($request->all());
        //_____________________________________

        return redirect()->route("p.index")->with('Message', ' create profile is successful ');





   
    }

    /**
     * Display the specified resource.
     */
    public function show(Profiles $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $prot = profiles::find($id);
        return view('pages.edite', compact('prot'));
    }

    /**
     * // 
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $profile = profiles::find($id);
        $profile->Name = $request->input('name');
        $profile->Email = $request->input('email');
        $profile->age = $request->input('age');
        $profile->save();

        return redirect()->route('p.index')->with('Message', ' update is successful ');
    }

    /**
     * Remove the specified resource from storage.
     */
    //delete data : 
    public function destroy($id)
    {
        $profile = Profiles::find($id);
        $profile->delete();
        // profiles::find($id)->delete();
    
        return redirect()->route('p.index')->with('Message', ' delete  is successful ');
    }
    public function deleteAll()
    {
        profiles::truncate();
        
        return redirect()->route('p.index')->with('Message', 'All profiles deleted successfully.');
    }
}
