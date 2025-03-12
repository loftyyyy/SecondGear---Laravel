@component('mail::message')
# New Offer for Your Car

**{{ $car->title }}** ({{ $car->brand }} {{ $car->model }} {{ $car->year }})

Dear {{ $car->user->name }},

You have received a new offer for your car listing.

## Offer Details:

**From:** {{ $quoteData['name'] }}  
**Email:** {{ $quoteData['email'] }}  
**Phone:** {{ $quoteData['phone'] }}  
**Offer Price:** ₱{{ number_format($quoteData['offer_price'], 0) }}  
**Your Listed Price:** ₱{{ number_format($car->price, 0) }}  
**Difference:** ₱{{ number_format($quoteData['offer_price'] - $car->price, 0) }}

@if(isset($quoteData['message']) && $quoteData['message'])
## Message:
{{ $quoteData['message'] }}
@endif

@component('mail::button', ['url' => route('cars.show', $car->id)])
View Your Listing
@endcomponent

You can contact the buyer directly using their contact details above.

Thank you,<br>
Second Gear Team
@endcomponent
