<div class="cards-container">
    @foreach ($cards as $card)
        <div class="card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="card-image">
                <img src="{{ config('app.url') }}/storage/{{ $card['image'] }}" alt="{{ $card['titleOne'] }}">

            </div>
            <div class="card-content">
                <div>
                    <div class="priceOne">
                        <h3>{{ $card['titleOne'] }}</h3>
                        <ul>
                            @foreach ($card['pricesOne'] as $item)
                                <li>
                                    <p>{{ $item['name'] }}</p>
                                    <p>{{ $item['price'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="priceTwo">
                        <h3>{{ $card['titleTwo'] }}</h3>
                        <ul>
                            @foreach ($card['pricesTwo'] as $item)
                                <li>
                                    <p>{{ $item['name'] }}</p>
                                    <p>{{ $item['price'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <button class="book-now" onclick="handleBooking(1)">Book Now!</button>
            </div>
        </div>
    @endforeach
</div>
