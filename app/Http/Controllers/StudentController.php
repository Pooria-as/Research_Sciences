<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Field;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function __construct()
    {
        return $this->middleware("AdminAccess")->except(["index","show"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('Dashboard.Student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $fields = Field::all();
        return view('Dashboard.Student.create', compact('grades', 'fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $image = $request->image;
        $image_unique = hexdec(uniqid());
        $image_get_extention = strtoupper($image->getClientOriginalExtension());
        $image_name = $image_unique . '.' . $image_get_extention;
        $image_location = 'Dashboard/Students/img/';
        $last_image = $image_location . $image_name;
        $image->move($image_location, $image_name);

        Student::create([
            'name' => $request->name,
            'family' => $request->family,
            'grade_id' => $request->grade_id,
            'field_id' => $request->field_id,
            'image' => $last_image,
            'birthdate' => $request->birthdate,
            'national_code' => $request->national_code,
            'entry_date' => $request->entry_date,
            'Gender' => $request->Gender,
        ]);

        Alert::success('موفق ✔', 'دانشجو با موفقیت افزوده شد ');
        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('Dashboard.Student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $grades = Grade::all();
        $fields = Field::all();
        return view(
            'Dashboard.Student.edit',
            compact('student', 'grades', 'fields')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $old_image = $request->old_image;
        $image = $request->image;
        if ($image) {
            $image_unique = hexdec(uniqid());
            $image_get_extention = strtoupper(
                $image->getClientOriginalExtension()
            );
            $image_name = $image_unique . '.' . $image_get_extention;
            $image_location = 'Dashboard/Students/img/';
            $last_image = $image_location . $image_name;
            $image->move($image_location, $image_name);
            // unlink($old_image);
            $student->update([
                'name' => $request->name,
                'family' => $request->family,
                'grade_id' => $request->grade_id,
                'field_id' => $request->field_id,
                'birthdate' => $request->birthdate,
                'national_code' => $request->national_code,
                'entry_date' => $request->entry_date,
                'Gender' => $request->Gender,
                'image' => $last_image,
            ]);
        } else {
            $student->update([
                'name' => $request->name,
                'family' => $request->family,
                'grade_id' => $request->grade_id,
                'field_id' => $request->field_id,
                'birthdate' => $request->birthdate,
                'national_code' => $request->national_code,
                'entry_date' => $request->entry_date,
                'Gender' => $request->Gender,
            ]);
        }
        Alert::success('موفق ✔', 'دانشجو با موفقیت ویرایش شد ');

        return redirect(route("student.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        Alert::success('موفق ✔', 'دانشجو با موفقیت حذف شد ');
        return back();
    }
}
