 <!------------------------------Events--------------------------------->
 <div class="intro">
    <h1 style="font-size: 50px; font-weight: bold;">Recent Event</h1>
</div>


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