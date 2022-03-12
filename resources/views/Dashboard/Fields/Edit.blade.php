@extends("Dashboard.layout.master")
@section('route_1', 'رشته تحصیلی ')
@section('route_2', 'ویرایش')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('field.index') }}" class="btn btn-sm p-2 m-2 btn-outline-secondary">برگشت به لیست رشته
                    ها</a>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            ویرایش رشته تحصیلی
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('field.update', $field->name) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <input type="text" value="{{ $field->name }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
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
                                        <option value="{{ $grade->id }}"
                                            @if ($grade->id == $field->grade_id) selected @endif>
                                            {{ $grade->name }}
                                        </option>
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
                                        <option value="{{ $college->id }}"
                                            @if ($college->id == $field->college_id) selected @endif>
                                            {{ $college->name }}
                                        </option>
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
                                <button type="submit" class="btn btn-primary btn-block">ویرایش </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
