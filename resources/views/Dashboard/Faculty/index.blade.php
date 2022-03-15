@extends("Dashboard.layout.master")
@section('route_1', 'هیات-علمی')
@section('route_2', 'لیست هیات علمی')
@section('content')

    <div class="container">
        <div class="col-md-12">
           @if(Auth::user()->role==1)
           <a href="{{ route("faculty.all") }}" class="btn btn-sm btn-outline-secondary m-2">
            تمامی هیت علمی
        </a>
           @endif
            <div class="row">
                @foreach ($faculties as $faculty)
                    <div class="col-md-4">
                        <div class="card" style="width:200px;">
                            <img class="card-img-top" src="/{{ $faculty->image }}" width="100" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $faculty->name }} {{ $faculty->family }}</h5>
                                <p class="card-text m-1">
                                    سمت :{{ $faculty->degree }}
                                    </p>
                                    <p>
                                        دانشگاه :{{$faculty->Univercity_name  }}
                                    </p>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ route("faculty.show",$faculty) }}" class="btn btn-primary">بیشتر</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
