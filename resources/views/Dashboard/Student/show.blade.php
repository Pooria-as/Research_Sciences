@extends("Dashboard.layout.master")
@section('route_1', 'دانشجو')
@section('route_2', 'اطلاعات ')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">

                <h4>
                    دانشجو : {{ $student->name }} {{ $student->family }}
                </h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <p>
                            نام : {{ $student->name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            نام خانوادگی : {{ $student->name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            تاریخ تولد :{{ $student->birthdate }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            تاریخ ورود : {{ $student->entry_date }}

                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            رشته تحصیلی : {{ $student->field->name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            مقطع تحصیلی : {{ $student->grade->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="/{{ $student->image }}" width="200" height="200" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>
                            جنیست :@if($student->Gender=="male")
                            مرد
                            @else
                            زن
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
