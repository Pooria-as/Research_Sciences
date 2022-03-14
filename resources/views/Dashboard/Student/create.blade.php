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
                    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">نام دانشجو</label>
                                    <input type="text" id="name"
                                    autofocus
                                    value="{{ old('name') }}"
                                    name="name" placeholder="نام دانشجو"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="family">نام خانوادگی دانشجو</label>

                                    <input type="text"
                                    value="{{ old('family') }}"
                                    id="family" name="family" placeholder="نام خانوادگی دانشجو"
                                        class="form-control @error('family') is-invalid @enderror">
                                    @error('family')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="family">کد ملی دانشجو</label>

                                    <input type="text"
                                    value="{{ old('national_code') }}"

                                    name="national_code" placeholder="کد ملی دانشجو"
                                        class="form-control @error('national_code') is-invalid @enderror">
                                    @error('national_code')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthdate">تاریخ تولد</label>
                                    <input type="text"
                                    value="{{ old('birthdate') }}"

                                    id="birthdate" name="birthdate" class="form-control example1" />

                                    @error('birthdate')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="entry_date">تاریخ ورود</label>
                                    <input type="text"
                                    value="{{ old('entry_date') }}"

                                    id="entry_date" name="entry_date" class="form-control example1" />

                                    @error('entry_date')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                        <div class="form-group">
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


                            </div>
                            <div class="col-md-6">
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
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">

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


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">عکس دانشجو</label>

                                    <input type="file"   name="image" onchange="readURL(this);" class="form-control">
                                    <img id="blah" src="#" alt="تصویر دانشجو" width="700" height="700" />
                                    @error('image')
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="from-group">
                            <button type="submit" class="btn btn-block btn-success">افزودن دانشجو </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $(".example1").pDatepicker({
                initialValueType: "gregorian",
                format: "YYYY/MM/DD",
                onSelect: "year"
            });


        });
    </script>

<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>

@endsection
