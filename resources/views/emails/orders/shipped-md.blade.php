<x-mail::message>
# Order Shipped

Hi, {{$order->user->name}}

Your order created at {{$order->created_at}} has been shipped!

<x-mail::button :url="$url">
    View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>