<x-mail::message>
# order placed successfully!

Thanks for your order. your order number is : {{ $order->id }}

<x-mail::button :url="$url">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
