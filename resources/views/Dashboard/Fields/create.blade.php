@extends("Dashboard.layout.master")
@section('route_1', 'رشته تحصیلی افزودن')
@section('route_2', 'لیست')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            افزودن رشته جدید
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('field.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="رشته تحصیلی">
                                @error('name')
                                    <span class="badge badge-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="grade_id" class="form-control">
                                    @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach

                                </select>
                                @error('grade_id')
                                    <br>
                                    <span class="badge badge-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="college_id" class="form-control">
                                    @foreach ($colleges as $college)
                                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                                    @endforeach

                                </select>
                                @error('college_id')
                                    <br>
                                    <span class="badge badge-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">افزودن </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>











    @endsection
