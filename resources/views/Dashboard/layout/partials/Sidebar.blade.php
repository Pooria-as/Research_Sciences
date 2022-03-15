<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <img src="{{ asset('Dashboard/img/ic_azad_uni_logo.png') }}" width="20" alt="">
                <p>
                    واحد علوم تحقیقات
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                    لیست دانشکده ها
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-university"></i>
                <p>
                    دانشجو
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('student.index') }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>دانشجو ها</p>
                    </a>
                </li>
                @if (Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ route('student.create') }}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>افزودن دانشجو </p>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-wpforms"></i>
                <p>
                    مقطع تحصیلی
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('grade.index') }}" class="nav-link">
                        <i class="fa fa-plus nav-icon"></i>
                        <p>افزودن مقطع تحصیلی</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book "></i>
                <p>
                    رشته تحصیلی
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('field.index') }}" class="nav-link">
                        <i class="fa fa-bookmark nav-icon"></i>
                        <p>تمامی رشته تحصیلی</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('field.create') }}" class="nav-link">
                        <i class="fa fa-plus nav-icon"></i>
                        <p>افزودن رشته تحصیلی</p>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-user-plus"></i>
                <p>
                    هیت علمی دانشگاه
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('faculty.index') }}" class="nav-link">
                        <i class="fa fa-bookmark nav-icon"></i>
                        <p>تمامی هیت علمی</p>
                    </a>
                </li>
                @if (Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ route('faculty.create') }}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>افزودن هیت علمی</p>
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    کاربران سامانه
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if (Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="fa fa-bookmark nav-icon"></i>
                            <p>تمامی ادمین ها</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.create') }}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>افزودن ادمین</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('user.show', Auth::user()->name) }}" class="nav-link">
                        <i class="fa fa-user nav-icon"></i>
                        <p> ادمین</p>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
