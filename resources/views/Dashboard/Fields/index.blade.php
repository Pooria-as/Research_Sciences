@extends("Dashboard.layout.master")
@section('route_1', 'رشته های تحصیلی')
@section('route_2', 'لیست')

@section('content')



    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            لیست مقاطع تحصیلی
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (count($fields) == 0)
                            <p>
                                بدون داده 😒
                            </p>
                        @else
                        <a href="{{ route("field.create") }}" class="btn btn-success">افزودن رشته</a>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" 👀 جست و جو"
                                title="Type in a name" class="form-control m-1">

                            <table class="table table-striped table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">نام رشته</th>
                                        <th scope="col">نام دانشکده</th>
                                        <th scope="col">مقطع تحصیلی</th>
                                        <th scope="col"> </th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fields as $field)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $field->name }}</td>
                                            <td>{{ $field->college->name }}</td>
                                            <td>{{ $field->grade->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('field.edit', $field->name) }}"><i
                                                        class="fa fa-edit">
                                                    </i> </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('field.destroy', $field->name) }}" method="POST">
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
                                {{ $fields->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
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
