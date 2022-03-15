@extends("Dashboard.layout.master")
@section('route_1', 'لیست ')
@section('route_2', 'هیت علمی دانشگاه')
@section('content')


    <div class="container">


        <div class="col-md-12">
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-outline-secondary m-2">
                افزودن هیت علمی دانشگاه
            </a>
            <table class="table  table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عکس</th>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col"></th>
                        <th scope="col"></th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculties as $faculty)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <img src="/{{ $faculty->image }}" width="100" alt="">
                            </td>
                            <td>{{ $faculty->name }}</td>
                            <td>{{ $faculty->family }}</td>
                            <td>{{ $faculty->email }}</td>
                            <td>
                                <a href="{{ route("faculty.edit",$faculty->id) }}" class="btn btn-primary">
                                    <i class="fa fa-edit">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('faculty.destroy', $faculty) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn-sm  btn-danger"
                                        onclick="return confirm('آیا میخواهید هیت علمی را حذف کنید ؟?');" type="submit">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>








@endsection
