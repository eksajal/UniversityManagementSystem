<!------------------------------Nav--------------------------------->
<div class="nav">
    <div class="hamburger" onclick="toggleMenu()">
        &#9776; <!-- Hamburger icon -->
    </div>

    <div class="nav-logo">
        <img style="height: 65px; width: 65px; margin-left: 10px;  margin-top: 20px;" src="images/bg1.jpg"
            alt="logo" />
    </div>

    <div class="search">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Enter keyword..." value="{{ request('query') }}">
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Check if there is any result -->
    @php
        $hasResults = (isset($notice) && $notice->isNotEmpty()) || 
                      (isset($faculty) && $faculty->isNotEmpty()) || 
                      (isset($department) && $department->isNotEmpty()) || 
                      (isset($course) && $course->isNotEmpty()) || 
                      (isset($event) && $event->isNotEmpty()) || 
                      (isset($gallery) && $gallery->isNotEmpty());
    @endphp

    <!-- Notices Section -->
    <div class="{{ request('query') && isset($notice) && $notice->isNotEmpty() ? '' : 'hidden' }}">
        @if (isset($notice) && $notice->isNotEmpty())
            @foreach ($notice as $item)
                <div class="notice">
                    <h3><strong>Important!</strong></h3>
                    <p>{{ $item->description }}</p>
                    <div style="text-align: center; margin-top: 50px;">
                        <div class="faculty_btn">
                            <a href="">View All Notices</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Faculties Section -->
    <div class="{{ request('query') && isset($faculty) && $faculty->isNotEmpty() ? '' : 'hidden' }}">
        <div class="founders-panel">
            @if (isset($faculty) && $faculty->isNotEmpty())
                @foreach ($faculty as $faculty)
                    <div class="founder1">
                        <div class="founder-img">
                            <img src="facultyImage/{{ $faculty->image }}" alt="" />
                        </div>
                        <div class="founder-txt">
                            <h3>{{ $faculty->name }}</h3>
                            <h4 style="font-size: 12px; color:aqua;">Dept: <br>
                                <span style="color: rgb(10, 240, 167);"><strong>{{ $faculty->dept_name }}</strong></span>
                            </h4><br>
                            <h4 style="font-size: 10px; color:aqua;">Courses: <br>
                                <span style="color: rgba(243, 255, 232, 0.989);"><strong>{{ $faculty->course_title }}</strong></span>
                            </h4>
                            <p style="font-size: 12px;">{{ $faculty->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>



 {{-- <!-- Departments Section -->
<div class="{{ request('query') && isset($department) ? '' : 'hidden' }}">
    <div class="founders-panel" style="margin-bottom: 250px; padding: 80px;">
        <div class="founder1">
            <div class="dept">
                @if (isset($department) && !empty($department)) <!-- Check if department exists and is not empty -->
                    <ul>
                        @foreach ($department as $dept) <!-- Use a different variable name for the loop -->
                            <li>
                                <span>
                                    <i class="fas fa-graduation-cap"></i>
                                    <a href="{{ url('dept_details_page', $dept->id) }}">{{ $dept->dept_name }}</a> <!-- Use the dept_name -->
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div> --}}


    <!-- Courses Section -->
    <div class="{{ request('query') && isset($course) && $course->isNotEmpty() ? '' : 'hidden' }}">
        <div class="founders-panel" style="margin-bottom: 250px; padding: 80px;">
            <div class="founder1">
                <div class="dept">
                    @if (isset($course) && $course->isNotEmpty())
                        <ul>
                            @foreach ($course as $course)
                                <li>
                                    <span><i class="fas fa-book"></i>{{ $course->title }}</span>
                                    <div class="description">{{ $course->description }}</div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <div class="{{ request('query') && isset($event) && $event->isNotEmpty() ? '' : 'hidden' }}">
        @if (isset($event) && $event->isNotEmpty())
            @foreach ($event as $event)
                <div class="recent-event">
                    <div class="event-img">
                        <img src="eventImage/{{ $event->image }}" alt="" />
                    </div>
                    <div class="event-info">
                        <h3 style="font-size: 30px; font-weight: bold;">{{ $event->name }}!!!</h3>
                        <p style="font-size: 15px; padding: 0;">
                            {{ $event->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Gallery Section -->
    <div class="{{ request('query') && isset($gallery) && $gallery->isNotEmpty() ? '' : 'hidden' }}">
        <div class="gallery">
            @if (isset($gallery) && $gallery->isNotEmpty())
                @foreach ($gallery as $gallery)
                    <div class="gallery1">
                        <div class="gallery-img">
                            <img src="galleryImage/{{ $gallery->image }}" alt="" />
                        </div>
                        <div class="gallery-txt">
                            <h3>{{ $gallery->intro }}</h3>
                            <p>{{ $gallery->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- No Results Found Message -->
    @if (request('query') && !$hasResults)
        <div class="no-results">
            <h3>No results found for '{{ request('query') }}'</h3>
        </div>
    @endif

    <div class="nav-bar">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>
                <a id="explore" href="">Explore</a>
                <div id="explore_box">
                    <ul>
                        <li><a href="{{ url('about_page') }}">About</a></li>
                        <li><a href="{{ url('department_page') }}">Department</a></li>
                        <li><a href="{{ url('faculty_page') }}">Faculty</a></li>
                        <li><a href="{{ url('student_page') }}">Student</a></li>
                        <li><a href="{{ url('course_page') }}">Courses</a></li>
                        <li><a href="{{ url('notice_page') }}">Notice</a></li>
                        <li><a href="{{ url('achievement_page') }}">Achievement</a></li>
                        <li><a href="{{ url('helpline_page') }}">Helpline</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{ url('gallery_page') }}">Gallery</a></li>
            <li><a href="{{ url('evaluation') }}">Evaluation</a></li>
            <li><a href="{{ url('contact_page') }}">Admission</a></li>

            @if (Route::has('login'))
                @auth
                    <li>
                        <x-app-layout></x-app-layout>
                    </li>
                @else
                    <li><a href="{{ url('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ url('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
</div>

<script>
    function toggleMenu() {
        const navBar = document.querySelector('.nav-bar');
        navBar.classList.toggle('active'); // Toggle 'active' class to show/hide menu
    }
</script>

<style>
    .no-results {
        text-align: center;
        margin: 20px 0;
        font-size: 20px;
        color: red; /* Change color as needed */
    }
</style>
