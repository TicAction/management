<?php

namespace App\Http\Controllers;

use App\Service;
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
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {
        $service->ortho = $request->get('ortho');
        $service->psy_ed = $request->get('psy_ed');
        $service->ts = $request->get('ts');
        $service->psycho = $request->get('psycho');
        $service->sdg = $request->get('sdg');
        $service->pi = $request->get('pi');
        $service->comment = $request->get('comment');
        $service->student_id = $request->get('student_id');
        $service->save();

        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
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
        $service->ortho = $request->get('ortho');
        $service->psy_ed = $request->get('psy_ed');
        $service->ts = $request->get('ts');
        $service->psycho = $request->get('psycho');
        $service->sdg = $request->get('sdg');
        $service->pi = $request->get('pi');
        $service->comment = $request->get('comment');
        $service->student_id = $request->get('student_id');
       $service->update();

      Session::flash('success','Vos modifications ont été effectuées avec succès');
      return redirect('service');
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
