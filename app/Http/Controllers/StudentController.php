<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
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
        $request->user()->authorizeRoles(['direction','enseignant']);
        $students =Student::all();


        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      // $request->user()->authorizeRoles(['enseignant','directeur']);
        $students = Student::orderBy('lastname')->get();
        return view('students.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();

        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->anniversary = $request->get('anniversary');
        $student->code = substr(uniqid(), -5);

        $student->save();

        $student->users()->attach(Auth::user()->id);
        Session::flash('success', "Vous avez bien enregistré l'élève");
        return redirect('eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Student $student)
    {
        $request->user()->authorizeRoles(['enseignant','directeur']);
        return view("students.show",compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Student $student)
    {

      $request->user()->authorizeRoles(['enseignant','directeur']);
        return view("students.edit",compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      $request->user()->authorizeRoles(['enseignant','directeur']);
        $req = $request->all();
        $student->update($req);

        Session::flash('success','Vos modifications ont été effectuées avec succès');
        return redirect('eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Student $student)
    {
        $request->user()->authorizeRoles(['enseignant','directeur']);
        $student->users()->detach();
        $student->delete();

        Session::flash('success',"Vous avez bien effacer les données");
        return redirect('eleve');
    }
}
