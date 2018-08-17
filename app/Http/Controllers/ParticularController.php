<?php

namespace App\Http\Controllers;

use App\Particular;
use Illuminate\Http\Request;

class ParticularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('particulars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Particular $particular)
    {

       $particular->behavior = $request->get('behavior');
       $particular->academic = $request->get('academic');
       $particular->famillial = $request->get('famillial');
       $particular->allergy = $request->get('allergy');
       $particular->disease = $request->get('disease');
       $particular->comment = $request->get('comment');
       $particular->student_id = $request->get('student_id');
       $particular->save();

       return redirect('particulier');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Particulars  $particulars
     * @return \Illuminate\Http\Response
     */
    public function show(Particular $particular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Particular  $particular
     * @return \Illuminate\Http\Response
     */
    public function edit(Particular $particular)
    {


        return view('particulars.edit',compact('particular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Particulars  $particulars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Particular $particular)
    {
       $particular->behavior = $request->get('behavior');
       $particular->academic = $request->get('academic');
       $particular->famillial = $request->get('famillial');
       $particular->allergy = $request->get('allergy');
       $particular->disease = $request->get('disease');
       $particular->comment = $request->get('comment');
       $particular->student_id = 1;
       $particular->update();

        return redirect('particulier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Particulars  $particulars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Particular $particular)
    {
        //
    }
}
