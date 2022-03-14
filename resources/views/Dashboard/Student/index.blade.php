@extends("Dashboard.layout.master")
@section('route_1', 'دانشجو')
@section('route_1', 'تمامی')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>
                        لیست دانشجو ها
                    </h4>
                    <h5>
                        تعداد دانشجو ها : <span class="badge badge-success">{{ $students->count() }} 👨‍🎓👩‍🎓</span>
                    </h5>
                </div>

            </div>
            <div class="card-body">
                <a href="{{ route('student.create') }}" class="btn btn-sm btn-outline-success">افزودن دانشجو</a>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" 👀 جست وجو بر اساس نام خانوادگی" title="Type in a name"
                    class="form-control m-1">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام خانوادگی</th>
                            <th scope="col">نام</th>
                            <th scope="col">تصویر دانشجو</th>
                            <th scope="col">کد ملی</th>
                            <th scope="col">سال ورود</th>
                            <th scope="col">رشته تحصیلی</th>
                            <th scope="col">اطلاعات بیشتر</th>
                            <th scope="col">ویرایش</th>

                            <th scope="col">حذف</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>

                                <td>{{ $student->family }}</td>
                                <td>{{ $student->name }}</td>
                                <td>
                                    <img src="/{{ $student->image }}" width="50" height="50" />
                                </td>
                                <td>{{ $student->national_code }}</td>
                                <td>{{ substr($student->entry_date, 0, 8) }}</td>

                                <td>{{ $student->field->name }} ({{ $student->grade->name }})</td>
                                <td>
                                    <a href="{{ route('student.show', $student->national_code) }}"
                                        class="btn btn-block btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                </td>
                                <td>
                                    <a href="{{ route('student.edit', $student->national_code) }}"
                                        class="btn btn-secondary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn-sm  btn-danger"
                                            onclick="return confirm('آیا میخواهید دانشجو را حذف کنید ؟?');" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>

                </table>
                <div class="container d-flex justify-content-center">
                    {{ $students->links('pagination::bootstrap-4') }}

                </div>
            </div>
        </div>
    </div>







    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>



@endsection
