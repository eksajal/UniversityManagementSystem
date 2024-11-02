<!------------------------------Faculties--------------------------------->

<div class="intro">
    <h1 style="font-size: 50px; font-weight: bold;">Faculties</h1>
</div>

<div class="founders-panel">
    @foreach ($faculty as $fac)
        <!-- Use a different variable name inside the loop -->
        <div class="founder1">
            <div class="founder-img">
                <img src="facultyImage/{{ $fac->image }}" alt="" />
            </div>
            <div class="founder-txt">
                <h3>{{ $fac->name }}</h3>
                <h4 style="font-size: 12px; color:aqua;">Dept: <br>
                    <span style="color: rgb(10, 240, 167);"><strong>{{ $fac->dept_name }}</strong></span>
                </h4><br>
                <h4 style="font-size: 10px; color:aqua;">Courses: <br>
                    <span style="color: rgba(243, 255, 232, 0.989);"><strong>{{ $fac->course_title }}</strong></span>
                </h4>
                <p style="font-size: 12px;">
                    {{ $fac->description }}
                </p>
            </div>
        </div>
    @endforeach

</div>


<div class="btn_zoom" style="text-align: center; margin-top: 50px;">
    <div class="faculty_btn">
        <a href="{{ url('faculty_page') }}">View All</a>
    </div>
</div>
