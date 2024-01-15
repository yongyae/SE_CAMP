<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class C_titles extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('titles.index');

        $data['titles'] = M_titles::all();
        return view('titles.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tit_name = $request->input('tit_name');
        $tit_is_active = $request->input('tit_is_active');
        if($tit_is_active == "on"){
            $tit_is_active = 1;
        }else{
            $tit_is_active = 0;
        }

        $m_title = new M_titles;
        $m_title->tit_name = $tit_name;
        $m_title->tit_is_active = $tit_is_active;
        $m_title->save();

        return Redirect::to('/titles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['titles_id'] = M_titles::find($id);
        $data['titles'] = M_titles::all();
        return view('titles.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['titles_id'] = M_titles::find($id);
        //$m_title->delete();

        return Redirect::to('/titles');
    }
}
