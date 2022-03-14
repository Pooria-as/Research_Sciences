<?php

namespace App\Providers;

use App\Models\Faculty;
use App\Models\Field;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $students = Student::all();
        $fields = Field::all();
        $grades = Grade::all();
        $Faculties = Faculty::all();
        view()->share("students", $students);
        view()->share("fields", $fields);
        view()->share("grades", $grades);
        view()->share("Faculties", $Faculties);
    }
}
