<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Ramsey\Uuid\v1;

class FacultyController extends Controller
{
    public function __construct()
    {
        return $this->middleware('AdminAccess')->except(['index', 'show']);
    }

    public function all()
    {
        $faculties = Faculty::paginate(20);
        return view('Dashboard.Faculty.all', compact('faculties'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::paginate(20);
        return view('Dashboard.Faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacultyRequest $request)
    {
        $image = $request->image;
        $image_unique = hexdec(uniqid());
        $image_get_extention = strtoupper($image->getClientOriginalExtension());
        $image_name = $image_unique . '.' . $image_get_extention;
        $image_location = 'Dashboard/Faculty/';
        $last_image = $image_location . $image_name;
        $image->move($image_location, $image_name);

        Faculty::create([
            'name' => $request->name,
            'family' => $request->family,
            'degree' => $request->degree,
            'filed' => $request->filed,
            'image' => $last_image,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'Univercity_name' => $request->Univercity_name,
            'about_me' => $request->about_me,
        ]);

        Alert::success('موفق ✔', 'هیت علمی با موفقیت افزوده شد ');
        return redirect(route('faculty.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        return view('Dashboard.Faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        return view('Dashboard.Faculty.update', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $old_image = $request->old_image;
        $image = $request->image;
        if ($image) {
            $image_unique = hexdec(uniqid());
            $image_get_extention = strtoupper(
                $image->getClientOriginalExtension()
            );
            $image_name = $image_unique . '.' . $image_get_extention;
            $image_location = 'Dashboard/Faculty/';
            $last_image = $image_location . $image_name;
            $image->move($image_location, $image_name);
            // unlink($old_image);
            $faculty->update([
                'name' => $request->name,
                'family' => $request->family,
                'degree' => $request->degree,
                'Gender' => $request->Gender,
                'filed' => $request->filed,
                'birth_date' => $request->birth_date,
                'Univercity_name' => $request->Univercity_name,
                'about_me' => $request->about_me,
                'image' => $last_image,
            ]);
        } else {
            $faculty->update([
                'name' => $request->name,
                'family' => $request->family,
                'degree' => $request->degree,
                'Gender' => $request->Gender,
                'filed' => $request->filed,
                'birth_date' => $request->birth_date,
                'Univercity_name' => $request->Univercity_name,
                'about_me' => $request->about_me,
            ]);
        }
        Alert::success('موفق ✔', 'هیت علمی با موفقیت افزوده شد ');

        return redirect(route('faculty.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        Alert::success('موفق ✔', 'هیت علمی با موفقیت افزوده شد ');
        return redirect(route('faculty.index'));
    }
}
