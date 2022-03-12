@extends("Dashboard.layout.master")
@section('route_1', 'مقاطع تحصیلی')
@section('route_2', 'ویرایش')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route("grade.index") }}" class="btn btn-sm btn-outline-success m-1">برگشت</a>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            ویرایش مقطع تحصیلی
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("grade.update", $grade->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <input type="text" value="{{ $grade->name }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <span class="badge badge-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">ویرایش </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>











    @endsection
