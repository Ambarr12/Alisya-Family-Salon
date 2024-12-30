@foreach ($testimonials as $testimoni)
    <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
        <div class="content">
            <p class="kutip">❞</p>
            <p class="message"> {{ $testimoni['message'] }} </p>

            <p class="name">──── {{ $testimoni['user']['name'] }} ────</p>
        </div>
    </div>
@endforeach

<div class="dot-indicators" id="dotIndicators">

</div>
