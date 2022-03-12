@extends("Dashboard.layout.master")
@section('route_1', 'ادمین')
@section('route_2', 'لیست ادمین ها')
@section('content')


    <div class="container">


        <div class="col-md-12">
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-outline-secondary m-2">
                افزودن ادمین
            </a>
            <table class="table  table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">شماره تماس</th>
                        <th scope="col">نقش</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (Str::length($user->tell) == 0)
                                    <span class="badge badge-danger">ندارد</span>
                                @else
                                {{ $user->tell }}
                                @endif
                            </td>
                            <td>
                                @if ($user->role == 1)
                                    <button class="btn btn-success">
                                        ادمین ✔
                                    </button>
                                @else
                                    <button class="btn btn-primary">
                                        نویسنده 👩‍💻
                                    </button>
                                @endif


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>








@endsection
