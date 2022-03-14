<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Field;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::all();
        $fields = Field::all();
        $grades = Grade::all();
        $Faculties = Faculty::all();
        return view('Dashboard.layout.master',compact("students","fields","grades","Faculties"));
    }
}
