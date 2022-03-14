<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{
                            $students->count() }}</h3>

                        <p>دانشجو</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="{{ route("student.index") }}" class="small-box-footer">اطلاعات بیشتر <i
                            class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            {{ $grades->count() }}
                        </h3>

                        <p>مقطع تحصیلی</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-wpforms"></i>
                    </div>
                    <a href="{{ route("grade.index") }}" class="small-box-footer">اطلاعات بیشتر <i
                            class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            {{ $Faculties->count() }}
                        </h3>

                        <p>هیت علمی</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-circle-o"></i>
                    </div>
                    <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                            class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>
                        {{$fields->count()}}</h3>

                        <p>رشته تحصیلی</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book "></i>
                    </div>
                    <a href="{{ route("field.index") }}" class="small-box-footer">اطلاعات بیشتر <i
                            class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="container">
            <div class="row">
                @yield("content")
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
