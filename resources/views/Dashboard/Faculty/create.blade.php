@extends("Dashboard.layout.master")
@section('route_1', 'هیات-علمی')
@section('route_2', 'افزودن هیات علمی')
@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        افزودن هیات علمی
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">نام </label>
                                    <input type="text" id="name" autofocus value="{{ old('name') }}" name="name"
                                        placeholder="نام " class="form-control @error('name') is-invalid @enderror">
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
                                    <label for="family">نام خانوادگی </label>

                                    <input type="text" value="{{ old('family') }}" id="family" name="family"
                                        placeholder="نام خانوادگی "
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
                                    <label for="degree">منصب/درجه</label>

                                    <input type="text" value="{{ old('degree') }}" name="degree" placeholder="منصب/درجه"
                                        class="form-control @error('degree') is-invalid @enderror">
                                    @error('degree')
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
                                    <input type="text" value="{{ old('birthdate') }}" id="birthdate" name="birth_date"
                                        class="form-control example1" />

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
                                    <label for="email">
                                        ایمیل
                                    </label>

                                    <input type="text" value="{{ old('email') }}" name="email" placeholder="ایمیل"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
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
                                    <label for="Univercity_name">
                                        دانشگاه
                                    </label>

                                    <input type="text" value="{{ old('Univercity_name') }}" name="Univercity_name"
                                        placeholder="نام دانشگاه تحصیل "
                                        class="form-control @error('Univercity_name') is-invalid @enderror">
                                    @error('Univercity_name')
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
                                    <label for="filed">
                                        رشته تحصیلی
                                    </label>

                                    <input type="text" value="{{ old('filed') }}" name="filed" placeholder="رشته تحصیلی "
                                        class="form-control @error('filed') is-invalid @enderror">
                                    @error('filed')
                                        <br>
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">عکس </label>

                                    <input type="file" name="image" onchange="readURL(this);" class="form-control">
                                    <img id="blah" src="#" alt="تصویر " width="700" height="700" />
                                    @error('image')
                                        <span class="badge badge-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="about_me">درباره ی هیت علمی</label>
                            <textarea name="about_me" id="about_me" cols="30" rows="10"
                                class="form-control @error('about_me') is-invalid @enderror"></textarea>
                            @error('about_me')
                                <br>
                                <span class="badge badge-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="from-group">
                            <button type="submit" class="btn btn-block btn-success">افزودن هیت علمی </button>
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

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result).width(150).height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>







@endsection
