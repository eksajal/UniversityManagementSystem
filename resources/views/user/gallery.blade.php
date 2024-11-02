
    <!------------------------------Gallery--------------------------------->

    <div class="intro">
        <h1 style="font-size: 50px; font-weight: bold;">Gallery</h1>
    </div>

    <div class="gallery">


        @foreach ($gallery as $gallery)
            
        <div class="gallery1">
            <div class="gallery-img">
                <img src="galleryImage/{{ $gallery->image }}" alt="" />
            </div>
            <div class="gallery-txt">
                <h3>{{ $gallery->intro }}</h3>
                <p>
                    {{ $gallery->description }}
                </p>
            </div>
        </div>

        @endforeach

        
    </div>


    <div class="btn_zoom" style="text-align: center; margin: auto;">
        <div class="more_button">
            <a href="{{ url('gallery_page') }}">View More</a>
        </div>
    </div>
