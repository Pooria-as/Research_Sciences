<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::paginate(5);
        return view('Dashboard.Grade.index', compact('grades'));
    }

    public function store(GradeRequest $request)
    {
        Grade::create($request->all());
        Alert::success('موفق ✔', 'مقطع تحصیلی با موفقیت افزوده شد ');

        return back();
    }

    public function edit(Grade $grade)
    {
        return view('Dashboard.Grade.Edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(GradeRequest $request, Grade $grade)
    {
        $grade->update($request->all());
        Alert::success('موفق ✔', 'مقطع تحصیلی با موفقیت ویرایش شد ');
        return redirect(route('grade.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        Alert::success('موفق ✔', 'مقطع تحصیلی با موفقیت حذف شد ');
        return back();
    }
}
