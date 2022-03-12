@extends("Dashboard.layout.master")
@section('route_1', 'دانشجو')
@section('route_2', 'افزودن دانشجو')

@section('content')

    <div class="container">
       <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    افزودن دانشجو
                </h4>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="name" placeholder="نام دانشجو" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="family" placeholder="نام خانوادگی دانشجو" class="form-control @error('family') is-invalid @enderror">
                    @error('family')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="national_code" placeholder="کد ملی دانشجو"
                        class="form-control @error('national_code') is-invalid @enderror">
                    @error('national_code')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="date" name="birthdate" placeholder="تاریخ تولد"
                        class="form-control @error('birthdate') is-invalid @enderror">
                    @error('birthdate')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label for="Gender">جنیست</label>
                    <select name="Gender" id="Gender" class="form-control">
                        <option value="male">مرد</option>
                        <option value="female">زن</option>
                    </select>
                    @error('Gender')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="grade_id">مقطع</label>

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
                    <label for="field_id">رشته تحصیلی</label>

                    <select name="field_id" class="form-control">
                        @foreach ($fields as $field)
                            <option value="{{ $field->id }}">{{ $field->name }}</option>
                        @endforeach

                    </select>
                    @error('field_id')
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="from-group">
                    <button type="submit" class="btn btn-block btn-success">افزودن دانشجو </button>
                </div>
              </form>
            </div>
        </div>
       </div>
    </div>















@endsection
