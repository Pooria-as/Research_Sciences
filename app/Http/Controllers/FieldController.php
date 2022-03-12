<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Models\College;
use App\Models\Field;
use App\Models\Grade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::paginate(10);
        return view('Dashboard.Fields.index', compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $colleges = College::all();
        return view('Dashboard.Fields.create', compact('grades', 'colleges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldRequest $request)
    {
        Field::create([
            'name' => $request->name,
            'grade_id' => $request->grade_id,
            'college_id' => $request->college_id,
        ]);
        Alert::success('موفق ✔', 'رشته تحصیلی با موفقیت افزوده شد ');
        return redirect(route('field.index'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        $grades = Grade::all();
        $colleges = College::all();
        return view(
            'Dashboard.Fields.Edit',
            compact('field', 'grades', 'colleges')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(FieldRequest $request, Field $field)
    {
        $field->update($request->all());
        Alert::success('موفق ✔', 'رشته تحصیلی با موفقیت ویرایش شد ');
        return redirect(route('field.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        $field->delete();
        Alert::success('موفق ✔', 'رشته تحصیلی با موفقیت حذف شد ');
        return back();
    }
}
