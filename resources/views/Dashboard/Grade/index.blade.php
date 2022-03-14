@extends("Dashboard.layout.master")
@section('route_1', 'مقطع تحصیلی')
@section('route_2', 'لیست')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            افزودن مقطع جدید
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('grade.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
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
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            لیست مقاطع تحصیلی
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (count($grades) == 0)
                            <p>
                                بدون داده 😒
                            </p>
                        @else

                            <table class="table table-striped table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">نام مقطع</th>
                                        <th scope="col"> </th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $grade->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('grade.edit', $grade->name) }}"><i
                                                        class="fa fa-edit">
                                                    </i> </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('grade.destroy', $grade->name) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-sm btn-danger" type="submit"><i
                                                            class="fa fa-trash"> </i> </button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="container d-flex justify-content-center m-2">
                                {{ $grades->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>







    @endsection
