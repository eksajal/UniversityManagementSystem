<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle">
            </div>
            <div class="title">
                <h1 class="h5">Ehsanul Sajal</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="{{ url('redirect') }}"> <i class="icon-home"></i>Home </a></li>



            <li><a href="#noticeDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-bell"></i>
                Notice</a>
                <ul id="noticeDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_notice_page') }}">Add Notice</a></li>
                    <li><a href="{{ url('view_notice_page') }}">View Notice</a></li>
                </ul>
            </li>

            <li><a href="#departmentDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-graduation-cap"></i>
                Departments</a>
                <ul id="departmentDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_dept_page') }}">Add Department</a></li>
                    <li><a href="{{ url('view_dept_page') }}">View Department</a></li>
                </ul>
            </li>

            <li><a href="#courseDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-book"></i>
                Courses</a>
                <ul id="courseDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_course_page') }}">Add Course</a></li>
                    <li><a href="{{ url('view_course_page') }}">View Courses</a></li>
                </ul>
            </li>

            <li><a href="#facultiesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-tie"></i>

                Faculties</a>
                <ul id="facultiesDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_faculty_page') }}">Add Faculty</a></li>
                    <li><a href="{{ url('view_faculty_page') }}">View Faculty</a></li>
                </ul>
            </li>

            <li><a href="#studentDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-users"></i>

                Students</a>
                <ul id="studentDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_student_page') }}">Add Student</a></li>
                    <li><a href="{{ url('view_student_page') }}">View Students</a></li>
                </ul>
            </li>


            <li><a href="#eventDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-bullhorn"></i>
                Events</a>
                <ul id="eventDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_event_page') }}">Add Event</a></li>
                    <li><a href="{{ url('view_event_page') }}">View Event</a></li>
                </ul>
            </li>


            <li><a href="#galleryDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-images"></i>

                Gallery</a>
                <ul id="galleryDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_gallery_page') }}">Add Gallery</a></li>
                    <li><a href="{{ url('view_gallery_page') }}">View Gallery</a></li>
                </ul>
            </li>

            <li class=""><a href="{{ url('candidate_page') }}"><i class="fas fa-user"></i>

                Candidates</a></li>



        </ul>
    </nav>
    <!-- Sidebar Navigation end-->
