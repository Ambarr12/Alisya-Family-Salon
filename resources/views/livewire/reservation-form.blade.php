<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="serviceName">Service Name*:</label>
            <select id="serviceName" wire:model.live="selectedProduct" required>
                <option value="">Select a service</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            <input type="hidden" wire:model="service_name">
            @error('service_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="serviceType">Service Type*:</label>
            <select id="serviceType" wire:model.live="selectedPrice" required
                @if (empty($selectedProduct)) disabled @endif>
                <option value="">Select a service type</option>
                @foreach ($prices as $price)
                    <option value="{{ $price->id }}">{{ $price->name }}</option>
                @endforeach
            </select>
            <input type="hidden" wire:model="service_type">
            @error('service_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" wire:model="phone">
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="bookingDate">Date Booking*:</label>
            <input type="datetime-local" id="bookingDate" wire:model="date_booking" required>
            @error('date_booking')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
