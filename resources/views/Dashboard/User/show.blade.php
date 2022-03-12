@extends("Dashboard.layout.master")
@section('route_1', 'کاربران')
@section('route_2', 'اطلاعات کاربر')
@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    نقش  :
                    @if ($user->role==1)
                    <button class="btn btn-success">
                        ادمین ✔
                    </button>
                    @else
                    <button class="btn btn-primary">
                        نویسنده 👩‍💻
                    </button>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">

                        نام کاربری :
                        {{ Auth::user()->name }} </h5>
                    <p class="card-text">
                        ایمیل :
                    {{ Auth()->user()->email }}
                    </p>
                </div>
                <div class="card-footer text-muted">
                    شماره تماس :{{ $user->tell }}
                </div>
            </div>
        </div>
    </div>







@endsection
