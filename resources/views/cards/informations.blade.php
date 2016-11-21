{{ dump($cards) }}

<ul>
@foreach ($cards as $key => $card)
    <li>ID : {{ $card->id }}</li>
    <li>Start : {{ $card->subscription_start }}</li>
    <li>End : {{ $card->subscription_end }}</li>
    <li>Is Active ? : {{ $card->is_active == 1 ? 'Yes' : 'No' }}</li>
@endforeach
</ul>
