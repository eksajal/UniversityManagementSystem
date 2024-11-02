    <!------------------------------Notice--------------------------------->
    <div class="intro">
        <h1 style="font-size: 50px; font-weight: bold;">Recent Notice</h1>
    </div>

    @foreach ($notice as $notice)
        
    <div class="notice">
        <h3><strong>Important!</strong></h3>
        <p>
            {{ $notice->description }}
        </p>

        <div class="btn_zoom" style="text-align: center; margin-top: 50px;">
            <div class="faculty_btn">
                <a href="{{ url('notice_page') }}">View All Notices</a>
            </div>
        </div>

    </div>

    @endforeach