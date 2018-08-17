<?php

namespace App\Http\Controllers;
use App\Group;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DirectionController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['direction']);
    $groups = Group::all();

    return view('directions.index',compact('groups'));
  }

  public function enseignant(Request $request)
  {
    $request->user()->authorizeRoles(['direction']);
    
    $groups = Group::all();
    $groups->load('user');

    return view('directions.teacher',compact('groups'));
  }

  public function eleve(Request $request)
  {
    $request->user()->authorizeRoles(['direction']);
    $students = Student::all();
    return view ('directions.eleve',compact('students'));
  }

  public function group(Request $request)
  {
    return view('directions.group');
  }


}
