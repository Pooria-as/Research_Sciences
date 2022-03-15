@extends("Dashboard.layout.master")
@section('route_1', 'هیت علمی')
@section('route_2', 'اطلاعات ')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">

                <h4>
                    هیت علمی : {{ $faculty->name }} {{ $faculty->family }}
                </h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <p>
                            نام : {{ $faculty->name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            نام خانوادگی : {{ $faculty->name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            تاریخ تولد :{{ $faculty->birth_date }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            تاریخ ورود :

                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            رشته تحصیلی : {{ $faculty->filed }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            نام دانشگاه : {{ $faculty->Univercity_name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="/{{ $faculty->image }}" width="200" height="200" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>
                            جنیست :@if($faculty->Gender=="male")
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
