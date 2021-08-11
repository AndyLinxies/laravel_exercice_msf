<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves=eleves::all();
        return view('pages.page1',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eleves=eleves::all();

        return view('pages.create',compact('eleves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new eleves;
        $store->nom_eleves=$request->nom_eleves;
        $store->prenom_eleves=$request->prenom_eleves;
        $store->age=$request->age;
        $store->etat=$request->etat;
        $store->save();
        return redirect('/eleves');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=eleves::find($id);
        return view('pages.shows',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=eleves::find($id);
        return view('pages.edit&update',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=eleves::find($id);
        $update->nom_eleves=$request->nom_eleves;
        $update->prenom_eleves=$request->prenom_eleves;
        $update->age=$request->age;
        $update->etat=$request->etat;
        $update->save();
        return redirect('/eleves');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=eleves::find($id);
        $destroy->delete();
        return redirect('/eleves');
    }
}
