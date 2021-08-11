<?php

namespace App\Http\Controllers;

use App\Models\typeformations;
use Illuminate\Http\Request;

class TypeformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeformations=typeformations::all();
        return view('pages.pageTypForma',compact('typeformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeformations=typeformations::all();
        return view('pages.create',compact('typeformations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new typeformations;
        $store->nom_typeformation=$request->nom_typeformation;
        $store->save();
        return redirect('/typeformations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show2=typeformations::find($id);
        return view('pages.typeformations.showsTypeForm',compact('show2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit2=typeformations::find($id);
        return view('pages.typeformations.editTypeForm',compact('edit2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=typeformations::find($id);
        $update->nom_typeformation=$request->nom_typeformation;
        $update->save();
        return redirect('/typeformations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=typeformations::find($id);
        $destroy->delete();
        return redirect('/typeformations');
    }
}
