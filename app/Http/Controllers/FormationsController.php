<?php

namespace App\Http\Controllers;

use App\Models\formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations=formations::all();
        return view('pages.pageForma',compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations=formations::all();
        return view('pages.create',compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new formations;
        $store->nom_formation=$request->nom_formation;
        $store->description=$request->description;
        $store->save();
        return redirect('/formations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show2=formations::find($id);
        return view('pages.formations.showsForm',compact('show2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit2=formations::find($id);
        return view('pages.formations.editForm',compact('edit2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=formations::find($id);
        $update->nom_formation=$request->nom_formation;
        $update->description=$request->description;
        $update->save();
        return redirect('/formations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=formations::find($id);
        $destroy->delete();
        return redirect('/formations');
    }
}
