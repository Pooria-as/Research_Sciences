@extends("Dashboard.layout.master")
@section('route_1', 'ادمین')
@section('route_2', 'افزودن ادمین ')
@section('content')


    <div class="container">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        افزودن ادمین
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="نام کاربری" autofocus>
                                @error("name")
                                <br>
                                <span class="badge badge-danger">
                                    {{ $message }}
                                </span>

                                @enderror
                        </div>


                        <div class="form-group">
                            <input type="text" name="tell" class="form-control @error('tell') is-invalid @enderror"
                                placeholder="شماره تماس " autofocus>
                                @error("tell")
                                <br>
                                <span class="badge badge-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                        </div>


                        <div class="form-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل">
                            @error("email")
                            <br>
                            <span class="badge badge-danger">
                                {{ $message }}
                            </span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="role" class="form-control">
                                <option value="1">ادمین</option>
                                <option value="2">کاربر عادی</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="رمزعبور">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-block btn-success" type="submit">افزودن</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>








@endsection
