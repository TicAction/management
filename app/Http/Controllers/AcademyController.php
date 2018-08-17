<?php

namespace App\Http\Controllers;

use App\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AcademyController extends Controller
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
        return view('academies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Academy $academy)
    {
        $academy->reading = $request->get('reading');
        $academy->writing = $request->get('writing');
        $academy->concept = $request->get('concept');
        $academy->problem = $request->get('problem');
        $academy->english = $request->get('english');
        $academy->student_id = $request->get('student_id');
        $academy->comment = $request->get('comment');
        $academy->save();

       Session::flash('success', "Vous avez bien enregistré les donneés");
        return redirect('eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function show(Academy $academy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function edit(Academy $academy)
    {
        
        return view('academies.edit',compact('academy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academy $academy)
    {
        $req = $request->all();
         $academy->update($req);

      Session::flash('success','Vos modifications ont été effectuées avec succès');
      return redirect('academie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academy $academy)
    {
        //
    }
}
