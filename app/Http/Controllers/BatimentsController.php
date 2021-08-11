<?php

namespace App\Http\Controllers;

use App\Models\batiments;
use App\Models\eleves;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiments=batiments::all();
        return view('pages.pageBat',compact('batiments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batiments=batiments::all();
        return view('pages.create',compact('batiments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new batiments;
        $store->nom_batiment=$request->nom_batiment;
        $store->description=$request->description;
        $store->save();
        return redirect('/batiments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show2=batiments::find($id);
        return view('pages.batiments.showsBat',compact('show2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit2=batiments::find($id);
        return view('pages.batiments.editBat',compact('edit2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=batiments::find($id);
        $update->nom_batiment=$request->nom_batiment;
        $update->description=$request->description;
        $update->save();
        return redirect('/batiments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=batiments::find($id);
        $destroy->delete();
        return redirect('/batiments');
    }
}
