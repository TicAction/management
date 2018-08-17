<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use App\Schoolboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SchoolController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
      $request->user()->authorizeRoles(['enseignant','directeur']);
      $schools =School::all();
      $schools->load('users');

      return view('schools.index',compact('schools'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
      $request->user()->authorizeRoles(['enseignant','directeur']);
      $schools = School::orderBy('school_name')->get();
      $schoolboards = Schoolboard::pluck('schoolboard_name', 'id');
      return view('schools.create',compact('schools','schoolboards'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, School $school)
  {
  

      $school->school_name = $request->get('school_name');
      $school->school_city = $request->get('school_city');
      $school->school_url = $request->get('school_url');

      $school->school_phone = $request->get('school_phone');
      $school->school_adress = $request->get('school_adress');
      $school->school_region = $request->get('school_region');
      $school->school_email = $request->get('school_email');
      $school->schoolboard_id = $request->get('schoolboard_id');


      $school->save();

      $school->users()->attach(Auth::user()->id);

      Session::flash('success', "Vous avez bien enregistré votre école");
      return redirect('ecole/create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\School  $school
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, School $school)
  {
      $request->user()->authorizeRoles(['enseignant','directeur']);
      return view("schools.show",compact('school'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\School  $school
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request, School $school)
  {

    $request->user()->authorizeRoles(['enseignant','directeur']);
      return view("schools.edit",compact('School'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\School  $school
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, School $school)
  {
    $request->user()->authorizeRoles(['enseignant','directeur']);
      $req = $request->all();
      $school->update($req);

      Session::flash('success','Vos modifications ont été effectuées avec succès');
      return redirect('ecole');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\School  $school
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, School $school)
  {
      $request->user()->authorizeRoles(['enseignant','directeur']);
      $school->users()->detach();
      $school->delete();

      Session::flash('success',"Vous avez bien effacer les données");
      return redirect('ecole');
  }
}
