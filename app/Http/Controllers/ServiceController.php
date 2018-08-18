<?php

namespace App\Http\Controllers;

use App\Service;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ServiceController extends Controller
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
    public function create($id)
    {
        $student = Student::find($id);
        return view('services.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {
        $student = $request->get('student');
        $service->service = $request->get('service');
        $service->start_date = $request->get('start_date');
        $service->end_date = $request->get('end_date');
        $service->comment = $request->get('comment');
       
        $service->save();
        
        $service->students()->attach($student);

        return redirect('eleve');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {


        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
       
        $service->service = $request->get('service');
        $service->start_date = $request->get('start_date');
        $service->end_date = $request->get('end_date');
        $service->comment = $request->get('comment');
       
       $service->update();
        $service->students()->sync('4');
       

      Session::flash('success','Vos modifications ont été effectuées avec succès');
      return redirect('eleve/4');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
